<?php include ("assets/pages/nav.php")?>
<?php $title = "Dashboard"; ?> 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="assets/stylesheets/main.css">
    <link rel="stylesheet" href="https://use.typekit.net/xkf2xga.css">
    <title><?php echo $title?></title>
</head>

<body class="homepage">
    <!-- Header Bar-->
    <header class="header-bar">
        <a href="index.php" class="logo">[cirs logo]</a>
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
                <a href="assets/pages/issue-post.php" class="create-post">create post</a>
            </div>
        </div>
    </div>

    <div class="center-element">
        <!-- Post Grid -->
        <div class="grid">
    <!-- #1 -->
            <article class="post-tile column-1-fourth">
                <div class="post-tile__header">
                    <img class="post-tile__status" src="assets/images/icons/status/status-pending.svg">
                    <img src="assets/images/icons/default-user-icon.svg" class="user-avatar">
                </div>

                <div class="post-tile__body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <!-- php post content var (db) (20 characters max)-->
                </div>

                <footer>
                    <div class="post-tile__date"><time datetime="2019-08-30">Aug 30</time> <!-- php date var (db) -->
                    </div>
                    <div class="post-tile__watching"><img src="assets/images/icons/indicators/watching.svg">4</div>
                </footer>
            </article>

    <!-- #2 -->
            <article class="post-tile column-1-fourth">
                <div class="post-tile__header">
                    <img class="post-tile__status" src="assets/images/icons/status/status-pending.svg">
                    <img src="assets/images/icons/default-user-icon.svg" class="user-avatar">
                </div>

                <div class="post-tile__body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <!-- php post content var (db) (20 characters max)-->
                </div>

                <footer>
                    <div class="post-tile__date"><time datetime="2019-08-30">Aug 30</time> <!-- php date var (db) -->
                    </div>
                    <div class="post-tile__watching"><img src="assets/images/icons/indicators/watching.svg">4</div>
                </footer>
            </article>
    <!-- #3 -->  
            <article class="post-tile column-1-fourth">
                <div class="post-tile__header">
                    <img class="post-tile__status" src="assets/images/icons/status/status-pending.svg">
                    <img src="assets/images/icons/default-user-icon.svg" class="user-avatar">
                </div>

                <div class="post-tile__body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <!-- php post content var (db) (20 characters max)-->
                </div>

                <footer>
                    <div class="post-tile__date"><time datetime="2019-08-30">Aug 30</time> <!-- php date var (db) -->
                    </div>
                    <div class="post-tile__watching"><img src="assets/images/icons/indicators/watching.svg">4</div>
                </footer>
            </article>
    <!-- #4 -->     
            <article class="post-tile column-1-fourth">
                <div class="post-tile__header">
                    <img class="post-tile__status" src="assets/images/icons/status/status-pending.svg">
                    <img src="assets/images/icons/default-user-icon.svg" class="user-avatar">
                </div>

                <div class="post-tile__body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <!-- php post content var (db) (20 characters max)-->
                </div>

                <footer>
                    <div class="post-tile__date"><time datetime="2019-08-30">Aug 30</time> <!-- php date var (db) -->
                    </div>
                    <div class="post-tile__watching"><img src="assets/images/icons/indicators/watching.svg">4</div>
                </footer>
            </article>
    <!-- #5 -->
            <article class="post-tile column-1-fourth">
                <div class="post-tile__header">
                    <img class="post-tile__status" src="assets/images/icons/status/status-pending.svg">
                    <img src="assets/images/icons/default-user-icon.svg" class="user-avatar">
                </div>

                <div class="post-tile__body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <!-- php post content var (db) (20 characters max)-->
                </div>

                <footer>
                    <div class="post-tile__date"><time datetime="2019-08-30">Aug 30</time> <!-- php date var (db) -->
                    </div>
                    <div class="post-tile__watching"><img src="assets/images/icons/indicators/watching.svg">4</div>
                </footer>
            </article>
    <!-- #6 -->   
            <article class="post-tile column-1-fourth">
                <div class="post-tile__header">
                    <img class="post-tile__status" src="assets/images/icons/status/status-pending.svg">
                    <img src="assets/images/icons/default-user-icon.svg" class="user-avatar">
                </div>

                <div class="post-tile__body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <!-- php post content var (db) (20 characters max)-->
                </div>

                <footer>
                    <div class="post-tile__date"><time datetime="2019-08-30">Aug 30</time> <!-- php date var (db) -->
                    </div>
                    <div class="post-tile__watching"><img src="assets/images/icons/indicators/watching.svg">4</div>
                </footer>
            </article>
    <!-- #7 -->      
            <article class="post-tile column-1-fourth">
                <div class="post-tile__header">
                    <img class="post-tile__status" src="assets/images/icons/status/status-pending.svg">
                    <img src="assets/images/icons/default-user-icon.svg" class="user-avatar">
                </div>

                <div class="post-tile__body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <!-- php post content var (db) (20 characters max)-->
                </div>

                <footer>
                    <div class="post-tile__date"><time datetime="2019-08-30">Aug 30</time> <!-- php date var (db) -->
                    </div>
                    <div class="post-tile__watching"><img src="assets/images/icons/indicators/watching.svg">4</div>
                </footer>
            </article>
    <!-- #8 -->   
            <article class="post-tile column-1-fourth">
                <div class="post-tile__header">
                    <img class="post-tile__status" src="assets/images/icons/status/status-pending.svg">
                    <img src="assets/images/icons/default-user-icon.svg" class="user-avatar">
                </div>

                <div class="post-tile__body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <!-- php post content var (db) (20 characters max)-->
                </div>

                <footer>
                    <div class="post-tile__date"><time datetime="2019-08-30">Aug 30</time> <!-- php date var (db) -->
                    </div>
                    <div class="post-tile__watching"><img src="assets/images/icons/indicators/watching.svg">4</div>
                </footer>
            </article>
    <!-- #9 -->   
            <article class="post-tile column-1-fourth">
                <div class="post-tile__header">
                    <img class="post-tile__status" src="assets/images/icons/status/status-pending.svg">
                    <img src="assets/images/icons/default-user-icon.svg" class="user-avatar">
                </div>

                <div class="post-tile__body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <!-- php post content var (db) (20 characters max)-->
                </div>

                <footer>
                    <div class="post-tile__date"><time datetime="2019-08-30">Aug 30</time> <!-- php date var (db) -->
                    </div>
                    <div class="post-tile__watching"><img src="assets/images/icons/indicators/watching.svg">4</div>
                </footer>
            </article>
    <!-- #10 -->   
            <article class="post-tile column-1-fourth">
                <div class="post-tile__header">
                    <img class="post-tile__status" src="assets/images/icons/status/status-pending.svg">
                    <img src="assets/images/icons/default-user-icon.svg" class="user-avatar">
                </div>

                <div class="post-tile__body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <!-- php post content var (db) (20 characters max)-->
                </div>

                <footer>
                    <div class="post-tile__date"><time datetime="2019-08-30">Aug 30</time> <!-- php date var (db) -->
                    </div>
                    <div class="post-tile__watching"><img src="assets/images/icons/indicators/watching.svg">4</div>
                </footer>
            </article>
    <!-- #11 -->   
            <article class="post-tile column-1-fourth">
                <div class="post-tile__header">
                    <img class="post-tile__status" src="assets/images/icons/status/status-pending.svg">
                    <img src="assets/images/icons/default-user-icon.svg" class="user-avatar">
                </div>

                <div class="post-tile__body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <!-- php post content var (db) (20 characters max)-->
                </div>

                <footer>
                    <div class="post-tile__date"><time datetime="2019-08-30">Aug 30</time> <!-- php date var (db) -->
                    </div>
                    <div class="post-tile__watching"><img src="assets/images/icons/indicators/watching.svg">4</div>
                </footer>
            </article>
    <!-- #12 -->   
            <article class="post-tile column-1-fourth">
                <div class="post-tile__header">
                    <img class="post-tile__status" src="assets/images/icons/status/status-pending.svg">
                    <img src="assets/images/icons/default-user-icon.svg" class="user-avatar">
                </div>

                <div class="post-tile__body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <!-- php post content var (db) (20 characters max)-->
                </div>

                <footer>
                    <div class="post-tile__date"><time datetime="2019-08-30">Aug 30</time> <!-- php date var (db) -->
                    </div>
                    <div class="post-tile__watching"><img src="assets/images/icons/indicators/watching.svg">4</div>
                </footer>
            </article>
            
        </div>  
    </div>
    
        <div class="advice-col-container">
            <div class="advice-col-box">
            </div>
        </div>

    <!-- include google's jquery hosted library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="assets/scripts/main.js"></script>
</body>

</html>
