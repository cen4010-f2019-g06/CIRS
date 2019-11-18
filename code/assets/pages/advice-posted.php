<?php 
include ("nav.php");
include ("../../DBController.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../stylesheets/main.css">
    <link rel="stylesheet" href="https://use.typekit.net/xkf2xga.css">
    <title>Advice</title>
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

    <p>Advice posted.</p>
    <?php
    
        $advicePost = new Advice();
        $advicePost->setContent($_POST['content']);
        $advicePost->setPostedByUserId(6);
        $advicePost->setPostedByZNum(23355639);
        $advicePost->setStatus(5);
        $advicePost->setTime(date("Y-m-d"));
        $advicePost->setWatchCount(3);
        $advicePost->setUserIcon("/~cen4010fal19_g06/assets/images/icons/default-user-icon.svg");
        $advicePost->setWatchId(2);
        $advicePost->setCommentCount(0);

        echo    "   <div class='advice-col-box'>
                                        <img class='advice-icon' src='../images/icons/indicators/advice-indicator.svg'>
                                        <div class='advice-col-body'>" . $advicePost->getContent() . "</div>
                                        <footer>
                                            <div class='advice-col__date'><time datetime='" . $advicePost->getTime() . "'>" . $advicePost->getTime() . "</time>
                                            </div>
                                            <div class='advice-col__comments'>(TODO:Comment count) comments<img class='comment-icon' src='../images/icons/comment-icon.svg'></div>
                                        </footer>
                                    </div>
                                ";
    
        insertAdvicePost($advicePost);
    ?>

    <!-- include google's jquery hosted library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="../scripts/main.js"></script>
</body>
</html>