<?php

require 'layout/header.php';

?>

<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Guest Book</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="/">Home</a></li>
                <li><a href="/new_post.php">Post</a></li>
                <li><a href="/list.php">Post List</a></li>
                <li><a href="/register.php">Register</a></li>
            </ul>
        </div>
        <!--/.navbar-collapse -->
    </div>
</div>