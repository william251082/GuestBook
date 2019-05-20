<?php

require 'lib/functions.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_POST['email'])) {
        $email = $_POST['email'];
    } elseif (empty($_POST['email'])) {
        echo "error : You did not enter an email.";
    }

    $posts = get_posts();
    $newPost = array(
        'email' => $email
    );
    $posts[] = $newPost;

    save_posts($posts);

    header('Location: /');
    die;
}

?>

<form action="register.php" method="POST">
    <div class="container">
        <h1>Register</h1>
        <p>Please fill in this form to create an account.</p>
        <hr>

        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>

        <label for="psw-repeat"><b>Repeat Password</b></label>
        <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
        <hr>
        <button type="submit" class="btn btn-success">Register</button>
    </div>
</form>