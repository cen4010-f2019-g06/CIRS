<?php 
include ("nav.php");
include_once '/home/cen4010fal19_g06/public_html/DBConnection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../stylesheets/main.css">
    <link rel="stylesheet" href="https://use.typekit.net/xkf2xga.css">
    <title>Event Posted</title>
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

    <p>Event posted.</p>
    <?php
        $eventPost = new Event();
        $eventPost->setTitle($_POST['title']);
        $eventPost->setPostedByUserId(6);
        $eventPost->setPostedByZNum(23355639);
        $eventPost->setStatus(5);
        $eventPost->setContent($_POST['content']);
        $eventPost->setUserIcon("/~cen4010fal19_g06/assets/images/icons/default-user-icon.svg");
        $eventPost->setTime(date("Y-m-d H:i:s"));
        $eventPost->setWatchId(2);
        $eventPost->setWatchCount(0);
        $eventPost->setLocation($_POST['location']);
        $eventPost->setEventDate($_POST['date'] . ' ' . $_POST['time']);

        $db->insertEventPost($eventPost);
    ?>

    <!-- include google's jquery hosted library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="../scripts/main.js"></script>
</body>
</html>