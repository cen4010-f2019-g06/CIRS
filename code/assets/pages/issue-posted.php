<?php 
include ("nav.php");
include ("../../DBController.php");
include ("../../Credentials.php");
$db = new DBController($DB_USER, $DB_PASSWORD); //Establish connection to DB with controller;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../stylesheets/main.css">
    <link rel="stylesheet" href="https://use.typekit.net/xkf2xga.css">
    <title>Issue Posted</title>
    <!--php:echo $title-->
</head>
    
<body>
    <header class="header-bar">
            <a href="../../index.php" class="logo">[cirs logo]</a>
            <img src="../images/buttons/menu-collapsed.svg" class="menu-bttn" id="menu-closed" onclick="openNav()">

            <div class="search-bar">
                <img class="search-icon" src="../images/icons/search-icon.svg">
                <input class="search" placeholder="Search">
            </div>
    </header>
    <div class="horizontal-line"></div>

    <p>Issue posted.</p>
    <?php

        $issuePost = new Issue();
        $issuePost->setTitle($_POST['title']);
        $issuePost->setContent($_POST['content']);
        $issuePost->setPostedByUserId(6);
        $issuePost->setPostedByZNum(23355639);
        $issuePost->setStatus(5);
        $issuePost->setTime(date("Y-m-d"));
        $issuePost->setWatchCount(0);
        $issuePost->setUserIcon("/~cen4010fal19_g06/assets/images/icons/default-user-icon.svg");
        $issuePost->setWatchId(2);
        $issuePost->setAdminReviews(0);

        $statusImage = $db->queryStatusIcon($issuePost->getStatus()); //get path to status image
        $watchIcon = $db->queryWatchIcon($issuePost->getWatchId()); //get path to watch icon image

        echo '<article class="column-1-fourth">' .
                        	'<div class="post-tile__header">
                			<img class="post-tile__status" src=' . $statusImage . '>
                			<img src="../images/icons/default-user-icon.svg" class="user-avatar">
                		</div>' .
                        '<div class="post-tile__body">
                		<p>' . substr($issuePost->getContent(), 1, 150) . ' . . .</p>
                	</div>' .
                       '<footer>
                		<div class="post-tile__date"><time>'. $issuePost->getTime(). '</time>
                		</div>
                		<div class="post-tile__watching"><img src='. $watchIcon .'>'. $issuePost->getWatchCount().'</div>
                	</footer>
                </article>';

        $db->insertIssuePost($issuePost);

   ?>

    <!-- include google's jquery hosted library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="../scripts/main.js"></script>
</body>
</html>