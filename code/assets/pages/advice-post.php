<?php 
include ("nav.php");
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
    
    <div class="post-type-sel">
        <button class="post-type-bttn" id="advice"><a href="advice-post.php">Advice</a></button>
        <button class="inactive-bttn post-type-bttn" id="event" ><a href="event-post.php">Event</a></button>
        <button class="inactive-bttn post-type-bttn" id="issue"><a href="issue-post.php">Issue</a></button>
    </div>
    
    <div class="hl-spacing"></div>
    
    <div class="center-element">
        <form action = "advice-posted.php" method = "POST">
            <div class="post-container--cp">
                <h4 class="advice-header">Ask a Question</h4>
                <div class="center-element">
                    <textarea class="post-content--advice" name="content" placeholder="Description..." maxlength="100"></textarea>
                </div>
            
                <input class="anonymous" type="checkbox" value="anonymous">Post anonymously<br>
                <button class="submit-bttn" input type="submit">Submit</button>
            </div>
        </form>
    </div>
    
    <!-- include google's jquery hosted library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="../scripts/main.js"></script>
</body>
</html>