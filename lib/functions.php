<?php

function get_connection()
{
    $config = require 'config.php';

    $pdo = new PDO(
        $config['database_dsn'],
        $config['database_user'],
        $config['database_pass']
    );

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $pdo;
}

function get_posts($limit = null)
{
    $pdo = get_connection();

    $query = 'SELECT * FROM post';
    if ($limit) {
        $query = $query . ' LIMIT :resultLimit';
    }
    $stmt = $pdo->prepare($query);
    $stmt->bindParam('resultLimit', $limit, PDO::PARAM_INT);
    $stmt->execute();
    $pets = $stmt->fetchAll();

    return $pets;
}

function save_posts($petsToSave)
{
    $json = json_encode($petsToSave, JSON_PRETTY_PRINT);
    file_put_contents('data/posts.json', $json);
}

function get_post($id)
{
    $pdo = get_connection();
    $query = 'SELECT * FROM post WHERE id = :idVal';
    $stmt = $pdo->prepare($query);
    $stmt->bindParam('idVal', $id);
    $stmt->execute();

    return $stmt->fetch();
}
