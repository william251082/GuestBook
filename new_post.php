<?php

require 'lib/functions.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['name'])) {
        $name = $_POST['name'];
    } elseif (empty($_POST['name'])) {
        echo "error : You did not enter a name.";
    }

    if (isset($_POST['email'])) {
        $email = $_POST['email'];
    } elseif (empty($_POST['email'])) {
        echo "error : You did not enter a email.";
    }

    if (isset($_POST['comment'])) {
        $comment = $_POST['comment'];
    } else {
        $comment = '';
    }

    $posts = get_posts();
    $newPost = array(
        'name' => $name,
        'email' => $email,
        'comment' => $comment
    );
    $posts[] = $newPost;

    save_posts($posts);

    header('Content-Type: application/json');
    if (empty($newPost['name'])) {
        echo "error : You did not enter a name.";
        die();
    } else {
        echo json_encode(["post" => $newPost]);
        die;
    }
}
?>

<div class="container">
    <div class="row">
        <div class="col-xs-6">
            <h1>Post a comment!</h1>

            <form action="/new_post.php" method="POST">
                <div class="form-group">
                    <label for="post-name" class="control-label">Name</label>
                    <input type="text" name="name" id="name" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="post-email" class="control-label">Email</label>
                    <input type="text" name="email" id="email" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="post-comment" class="control-label">Comment</label>
                    <input type="text" name="comment" id="comment" class="form-control"/>
                </div>

                <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-heart"></span> Add
                </button>
            </form>

        </div>
    </div>
</div>
