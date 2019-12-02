<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../stylesheets/main.css">
    <link rel="stylesheet" href="https://use.typekit.net/xkf2xga.css">
    <title>Dashboard</title>
</head>

<body>
    <?php include 'nav.php'?>
    <!-- Header Bar-->
    <header class="header-bar">
        <a href="../../index.html" class="logo">[cirs logo]</a>

        <img src="../images/buttons/menu-collapsed.svg" class="menu-bttn" id="menu-closed" onclick="openNav()">

        <div class="search-bar">
            <img class="search-icon" src="../images/icons/search-icon.svg">
            <input class="search" placeholder="Search" maxlength="200">
        </div>
    </header>
    <div class="horizontal-line"></div>


    <div class="center-element">
        <div class="search-post-container">
            <div class="search-result-header">
                <h3>Search results for "<!-- search goes here-->"</h3>
            </div>
            
            <div class="search-grid center-element">
                <!-- Search Item #1 -->
                <div class="search-item-header">
                    <img class="search-user-icon" src="../images/icons/default-user-icon.svg">
                    <p class="search-user"><span style="color: var(--faded-navy)">winkblink</span></p>
                </div>
                
                <div class="search-item-body">
                    <h3 class="search-title">Transport App is Garbage</h3>
                    <p><!-- this section will be nil for advice posts-->I often get asked about why I use Vim as my primary editor, there is no particular reason for this, except that I ended up learning it when I moved over to Linux full time many years ago. I ended up liking it because I could edit my small source files on my quad-core machine without needing to wait forever for the file to open.
                        Sure Vim isn’t a bad editor, it’s highly extensible, it’s easy...</p>
                </div>
                
                <div class="search-item-footer">
                    <time class="search-item-date">Sep 2019</time>
                    <div class="search-item-watch" ><img src="../images/icons/indicators/watching.svg">20</div>
                </div>
                <div class="horizontal-line"></div>

                <!-- Search Item #2 -->
                <div class="search-item-header">
                    <img class="search-user-icon" src="../images/icons/default-user-icon.svg">
                    <p class="search-user"><span style="color: var(--faded-navy)">winkblink</span></p>
                </div>
                
                <div class="search-item-body">
                    <h3 class="search-title">Transport App is Garbage</h3>
                    <p>I often get asked about why I use Vim as my primary editor, there is no particular reason for this, except that I ended up learning it when I moved over to Linux full time many years ago. I ended up liking it because I could edit my small source files on my quad-core machine without needing to wait forever for the file to open.
                        Sure Vim isn’t a bad editor, it’s highly extensible, it’s easy...</p>
                </div>
                
                <div class="search-item-footer">
                    <time class="search-item-date">Sep 2019</time>
                    <div class="search-item-watch" ><img src="../images/icons/indicators/watching.svg">20</div>
                </div>
                <div class="horizontal-line"></div>
                
                <!-- Search Item #3 -->
                <div class="search-item-header">
                    <img class="search-user-icon" src="../images/icons/default-user-icon.svg">
                    <p class="search-user"><span style="color: var(--faded-navy)">winkblink</span></p>
                </div>
                
                <div class="search-item-body">
                    <h3 class="search-title">Transport App is Garbage</h3>
                    <p>I often get asked about why I use Vim as my primary editor, there is no particular reason for this, except that I ended up learning it when I moved over to Linux full time many years ago. I ended up liking it because I could edit my small source files on my quad-core machine without needing to wait forever for the file to open.
                        Sure Vim isn’t a bad editor, it’s highly extensible, it’s easy...</p>
                </div>
                
                <div class="search-item-footer">
                    <time class="search-item-date">Sep 2019</time>
                    <div class="search-item-watch" ><img src="../images/icons/indicators/watching.svg">20</div>
                </div>
                <div class="horizontal-line"></div>
                
                    <div class="center-element">
                        <div class="search-nav-tool">
                            <!-- Left Page Nav -->
                            <button class="l-arrow">
                                <img class="arrow-size" src="../images/buttons/next-page-left.svg"></button>
                            <input class="page-num-container" placeholder="1" disabled>
                            <!-- Right Page Nav -->
                            <button class="r-arrow">
                                <img class="arrow-size" src="../images/buttons/next-page-right.svg"></button>
                        </div>
                    </div>
            </div>
            </div>


            
            
        </div>

    <!-- include google's jquery hosted library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="assets/scripts/main.js"></script>
</body>

</html>
