<?php
    include "input.php";

    $db = new DBController($DB_USER, $DB_PASSWORD);
    
    $post = new Post();
    $post->setType($_POST['type']);
    $post->setTitle($_POST['title']);
    $post->setDescription($_POST['description']);

    $db->insertPost($post);

    echo "post submitted" . "<br>" . "<br>";

    ?>

    <a href="index.php">Home<br></a>