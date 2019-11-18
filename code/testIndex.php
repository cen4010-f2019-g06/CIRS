<?php $title = "Dashboard"; ?>
<?php
include 'DBController.php';
include 'Credentials.php';
?>
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
            <a href="assets/pages/create-post/issue-post.php" class="create-post">create post</a>
        </div>
    </div>
</div>

<div class="center-element">
    <!-- Post Grid -->
    <div class="grid">

        <?php
        /*
         * Dynamically outputs 12 posts by filling HTML template with DB data
         */

        $db = new DBController($DB_USER, $DB_PASSWORD); //Establish connection to DB with controller

        $issuePostsArray = $db->getIssuePosts(); //get array of Issue posts from DB using controller

        //for each Post in the DB, display it on the page
        for($i=0; $i<12; $i++)
        {
            $statusImage = $db->queryStatusIcon($issuePostsArray[$i]->getStatus()); //get path to status image
            $watchIcon = $db->queryWatchIcon($issuePostsArray[$i]->getWatchId()); //get path to watch icon image

            echo '<article class="post-tile column-1-fourth">'.
                '            <div class="post-tile__header">
                <img class="post-tile__status" src="' . $statusImage . '">
                <img src="assets/images/icons/default-user-icon.svg" class="user-avatar">
                </div>' .
                '<div class="post-tile__body">
                <p>' . substr($issuePostsArray[$i]->getContent(), 1, 20) . '...</p>
                <!-- php post content var (db) (20 characters max)-->
                </div>' .
                '            <footer>
                <div class="post-tile__date"><time datetime="2019-08-30">'. $issuePostsArray[$i]->getTime(). '</time> <!-- php date var (db) -->
                </div>
                <div class="post-tile__watching"><img src='. $watchIcon .'>'. $issuePostsArray[$i]->getWatchCount().'</div>
                </footer>
                </article>';
        }
        ?>

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
