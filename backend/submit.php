<?php
    include "input.php";
    include 'Credentials.php'; //Database credentials stored in separate file not being push to repo for security practices
    include 'Post.php';
    include 'DBController.php';

    $db = new DBController($DB_USER, $DB_PASSWORD);
    
    $post = new Post();
    $post->setType($_POST['type']);
    $post->setTitle($_POST['title']);
    $post->setDescription($_POST['description']);

    $db->insertPost($post);

    echo "post submitted" . "<br>" . "<br>";

    ?>

    <a href="index.php">Home<br></a>