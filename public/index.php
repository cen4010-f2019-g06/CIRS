<?php include 'assets/pages/menu-links/nav.html'?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="assets/stylesheets/main.css">
    <link rel="stylesheet" href="https://use.typekit.net/xkf2xga.css">
    <title>Dash</title>
    <!--php:echo $title-->
</head>

<body>
    <!-- Header Bar-->
    <section id="dashboard" class="homepage">
        <header class="header-bar">
            <a href="index.html" class="logo">[cirs logo]</a>

            <img src="assets/images/buttons/menu-collapsed.svg" class="menu-bttn" id="menu-closed" onclick="openNav()">

            <div class="search-bar">
                <img class="search-icon" src="assets/images/icons/search-icon.svg">
                <input class="search" placeholder="Search" maxlength="200">
            </div>

        </header>
        <div class="horizontal-line"></div>

        <!-- Filter/Create Post-->
        <div class="dash-header">
            <div class="post-tile__filter">
                <h6>Deselect any of the following tags to refine your results:</h6>
                <div class="filter-option">
                </div>
            </div>
            <div class="create-post__outer">
                <div class="create-post__inner">
                    <a href="assets/pages/create-post/issue-post.html" class="create-post">create post</a>
                </div>
            </div>
        </div>

        <!-- Post Grid -->
        <div class="grid">
            <!-- Post #1-->
            <article class="post-tile column-1-fourth">
                <div class="post-tile__header">
                    <img class="post-tile__status" src="assets/images/icons/status/status-pending.svg">
                    <img src="assets/images/icons/default-user-icon.svg" class="user-avatar">
                </div>

                <div class="post-tile__body">
                    <h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h6>
                    <!-- php post content var (db) (20 characters max)-->
                </div>

                <footer>
                    <div class="post-tile__date"><time datetime="2019-08-30">Aug 30</time> <!-- php date var (db) -->
                    </div>
                    <div class="post-tile__watching"><img src="assets/images/icons/indicators/watching.svg">4</div>
                </footer>
            </article>
        </div>
    </section>

    <!-- include google's jquery hosted library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="assets/scripts/main.js"></script>
</body>

</html>
