<?php
include 'Comment.php';
include 'DBController.php';
include 'Credentials.php';
$db = new DBController($DB_USER, $DB_PASSWORD);
?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CEN 4010 - Group 6</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/momentjs/2.14.1/moment.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

    <link rel="stylesheet" href="css/general.css">
</head>
<body>
<div class="container intro">
    <h1>Campus Issue Reporting System (CIRS)</h1>
</div>

<br>

<div class="container intro">
    <h2>Comments</h2>
    <form action="" method="post">
        Enter comment<br>
        <input type="text" name="commentContent" placeholder="Enter comment...">
        <br><br>
        <input type="submit" value="Submit">
    </form>

    <?php

    //post comment to DB

    if(isset($_POST['commentContent']))
    {
        //TODO: in future, should grab postedByUserId constr param from session data
        $comment = new Comment($_POST['commentContent'], 3);
        echo $comment->getContent();
        echo $comment->getPostedByUserId();
        echo $comment->getTime();
        echo $comment->getUpvotes();
        echo $comment->getDownvotes() ;

        $db->insertComment($comment);
    }
    ?>


</div>

</body>
</html>
