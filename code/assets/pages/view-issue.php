<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../../stylesheets/main.css">
    <link rel="stylesheet" href="https://use.typekit.net/xkf2xga.css">
    <title>Support</title>
    <!--php:echo $title-->
</head>

<body>
    <header class="header-bar">
        <a href="../../../index.php" class="logo">[cirs logo]</a>
        <img src="../../images/buttons/menu-collapsed.svg" class="menu-bttn" id="menu-closed" onclick="openNav()">

        <div class="search-bar">
            <img class="search-icon" src="../../images/icons/search-icon.svg">
            <input class="search" placeholder="Search">
        </div>
    </header>
    <div class="horizontal-line"></div>

    <div class="center-element">
        <div class="user-container">
            <img class="icon" src="../../images/icons/default-user-icon.svg">
        </div>

        <div class="main-post-container">
            <span id="watch-msg" style="font-size: 14px; color: var(--success-green); display: inline-block; float: left; visibility: hidden;">
                You are now watching this post</span><br>
            
            <img class="status-line" src="../../images/icons/status/status-reviewed.svg"> <!-- add status icon var here -->

            <div class="tile-block">
                <h3><!-- issue description var --></h3>
            </div>

            <div class="indicators">
                <time class="post-date">Sep 23</time>
                <input class="post-watch" id ="watch-icon" type="image" src="../../images/icons/indicators/not-watching.svg" name="watching" onfocus="nowWatching(watch-icon, watch-msg)">
                <input class="post-flag" type="image" src="../../images/icons/flag.svg" name="flag">
            </div>

            <div class="scroll-container">
                <div class="scroll-area">
                    <div class="post-content">
                        <p><!-- issue post content var--></p>
                    </div>
                </div>
                <div class="scrollbar-track">
                    <img class="down-arrow" src="../../images/icons/scroll-arrow-down.svg">
                    <div class="scrollbar-thumb"></div>
                    <img class="up-arrow" src="../../images/icons/scroll-arrow-up.svg">
                </div>
            </div>
        </div>

        <section class="comment-container">
            <input class="post-comment" placeholder="Add a public comment...">
            <img class="comment-user-icon" src="../../images/icons/default-user-icon.svg">

            <h4 class="comment-header">Comments (<!-- comment count var-->)</h4>
            <div class="comment-box__small">
                <p class="comment-user"><span style="color: var(--faded-navy)"><!-- username var--></span> says:</p>
                <p class="comment-content__small"><!-- comment var --></p>
                <time class="comment-date"><!-- comment date --></time>
            </div>
        </section>

    </div>

    <!-- include google's jquery hosted library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="../../scripts/main.js"></script>
</body></html>