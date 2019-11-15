<?php
//at top of index.php file
include "checkLogin.php";
checkLogin();
?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CEN 4010 - Group 6</title>
        
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/general.css">
        
</head>
<body>
    <div class="container intro">
            <h1>Campus Issue Reporting System (CIRS)</h1>
    </div>

    <br>

    <div class="container intro">
            <h2>Project Description</h2>
            <p>CIRS is a issue, event, and advice portal for university faculty and students to report to a centralized location.  Currently in development.</p>
    </div>

    <br>

    <div class="container intro">
        <h2>Posts</h2>
        <?php
            include 'input.php';

            $db = new DBController($DB_USER, $DB_PASSWORD); //Establish connection to DB with controller

            $postsArray = $db->getPosts(); //get array of posts from DB using controller

            //for each Post in the DB, display it on the page
            foreach($postsArray as $p)
            {
                echo "<div class='container intro post'>".
                    "Type: " . $p->getType() . "<br>" .
                    "Title: " . $p->getTitle() . "<br>" .
                    "Content: " . $p->getDescription() . "<br><br>" .
                    "</div>";
            }

        ?>


    </div>

    <br>

    <div class="container intro">
        <h2>New Post</h2>
        <form action = "submit.php" method = "POST">
            <table border = "0">
                <tr>
                    <form>
                        <input type="radio" name="type" value="Issue" checked> Issue
                        <input type="radio" name="type" value="Event"> Event
                        <input type="radio" name="type" value="Advice"> Advice<br>
                    </form>
                <tr>
                    <td>Title</td>
                    <td><textarea name="title" rows="1" cols="30"></textarea></td>
                </tr>                
                <tr>    
                    <td>Description</td>
                    <td><textarea name="description" rows="10" cols="30"></textarea></td>
                </tr>
                <tr>
                    <td colspan = "2" align ="center"><input type = "submit" value = "submit"/></td>
                </tr>
            </table>
        </form>
    </div>

    <br>

    <div class="container intro">
        <h2> CEN 4010 - Group 6 - Group Members</h2>
        <a href="aboutDev/gkveton2017.html">Grant Kveton<br></a>
        <a href="aboutDev/nappletongue2015.html">Nicole Appleton Guerrero<br></a>
        <a href="aboutDev/kfash2017.html">Kevin Fash<br></a>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

</body>
</html>
