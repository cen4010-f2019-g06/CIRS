<?php

include '/home/cen4010fal19_g06/public_html/checkLogin.php';
include_once '/home/cen4010fal19_g06/public_html/DBConnection.php';

if(!isset($_SESSION['adminId']))
{
    header("Location: http://lamp.cse.fau.edu/~cen4010fal19_g06/");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../stylesheets/main.css">
    <link rel="stylesheet" href="https://use.typekit.net/xkf2xga.css">
    <script src="//cdn.ckeditor.com/4.13.0/basic/ckeditor.js"></script>
    <title>Issue</title>
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-153783349-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-153783349-1');
    </script>


</head>
    
<body class="admin-body">
<?php include 'admin-nav.php'?>
    <header class="header-bar">
        <a href="../../index.php" class="logo"><img class="logo" src="/~cen4010fal19_g06/assets/images/icons/logo-admin.png"></a>
        <img src="../images/buttons/admin-menu-collapsed.svg" class="menu-bttn" id="menu-closed" onclick="openAdminNav()">

        <?php include ("/home/cen4010fal19_g06/public_html/assets/pages/searchbar.php"); ?>

    </header>
    <div class="admin__horizontal-line"></div>

    <div class="center-element">
        <div class="post-container--cp">

            <?php
            if(isset($_GET['postId']))
            {
                $postId = $_GET['postId'];


                if(isset($_POST['status']))
                {
                    $db->updateStatus($postId, $_POST['status']);
                }

                $issue = $db->getIssueById($postId);
                $content = $issue->getContent();
                $title = $issue->getTitle();
                $time = $issue->getTime();
                $statusIcon = $db->queryStatusIcon($issue->getStatus());
            }

            echo'
            <fieldset class="admin-post-description-container">
                <div class="admin-post-info">
                    <span>Post No. '.$postId.'</span><br>
                    <time datetime="2019-08-30">'. $time .'</time><br><br>
                    <span style="margin-right: 10px;">Type: Issue </span><br>
                    <img class="admin-post__status" src='. $statusIcon .'>
                </div>
                <label class="admin-post-field-label">Description</label>
                <textarea class="admin-post-field" maxlength="150">' . $title .'</textarea>
            </fieldset>
            
            <div class="center-element">
                <textarea  class="admin-post-content--issue" name="issue" readonly>'. $content .'
                </textarea>
            </div>

            <div class="admin-review-sel">
            <form action="" method="post">
                <select class="admin-dropdown" name="status">
                    <option value="" disabled selected hidden>change status</option>
                    <option value="2">reviewed</option>
                    <option value="1">pending</option>
                    <option value="3">in progress</option>
                    <option value="4">done</option>
                </select><br><br>
                <input type="submit" class="admin__submit-bttn" value="Update"> 
            </form>
            </div>
            ';
            ?>
            

        </div>
    </div>
    
    <!-- include google's jquery hosted library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="../scripts/main.js"></script>
</body>
</html>