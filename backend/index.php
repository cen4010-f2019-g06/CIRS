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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/momentjs/2.14.1/moment.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        

    <link rel="stylesheet" href="css/general.css">

    <script>
        function showEvent(x)
        {
            if(x.checked)
            {
                document.getElementById("inputEventDate").style.visibility = "visible";
            }
        }

        function hideEvent(x)
        {
            if(x.checked)
            {
                document.getElementById("inputEventDate").style.visibility = "hidden";
            }
        }
    </script>
        
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
                        <input type="radio" name="type" value="Issue" checked onchange="hideEvent(this)"> Issue
                        <input type="radio" name="type" value="Event" onchange="showEvent(this)"> Event
                        <input type="radio" name="type" value="Advice" onchange="hideEvent(this)"> Advice<br>
                    </form>
                <tr>
                    <td>Title</td>
                    <td><textarea name="title" rows="1" cols="30"></textarea></td>
                </tr>                
                <tr>
                    <td>Description</td>
                    <td><textarea name="description" rows="10" cols="30"></textarea></td>
                </tr>
                <tr id ="inputEventDate" style="visibility:hidden">
                    <td>Event Date</td>
                    <td>
                        <div class="container">
                            <div class="row">
                                <div class='col-sm-6'>
                                    <div class="form-group">
                                        <div class='input-group date' id='datetimepicker1'>
                                            <input name="eventDate" type='text' class="form-control"/>
                                            <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                                        </div>
                                    </div>
                                </div>
                                <script type="text/javascript">
                                    $(function () {
                                        $('#datetimepicker1').datetimepicker();
                                    });
                                </script>
                            </div>
                        </div>
                    </td>
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



</body>
</html>
