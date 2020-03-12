<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_POST['email'])) {
        $email = $_POST['email'];
    } else {
        $email = '';
    }

    header('Location: /loggedIn.php');
    die;
}

?>

<form class="navbar-form navbar-right">
    <div class="form-group">
        <input type="text" placeholder="Email" class="form-control">
    </div>
    <div class="form-group">
        <input type="password" placeholder="Password" class="form-control">
    </div>
    <button type="submit" class="btn btn-success">Sign in</button>
</form>
