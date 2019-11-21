<?php
include 'DBController.php';
include 'Credentials.php';
$db = new DBController($DB_USER, $DB_PASSWORD); //Establish connection to DB with controller
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="assets/stylesheets/main.css">
    <link rel="stylesheet" href="https://use.typekit.net/xkf2xga.css">
    <title>Dashboard</title>
</head>

<body>
<?php include ("assets/pages/nav.php"); ?>
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
        <h6 style="color: var(--faded-navy);">Deselect any of the following tags to refine your results:</h6>
        <button class="filter-option">
            <img class="close-bttn" src="assets/images/buttons/close.svg">maintenance</button>
        <button class="filter-option">
            <img class="close-bttn" src="assets/images/buttons/close.svg">campus-living</button>
        <button class="filter-option">
            <img class="close-bttn" src="assets/images/buttons/close.svg">services</button>
        <button class="filter-option">
            <img class="close-bttn" src="assets/images/buttons/close.svg">recreation</button>
        <button class="filter-option">
            <img class="close-bttn" src="assets/images/buttons/close.svg">safety</button>
    </div>
    <div class="create-post__outer">
        <div class="create-post__inner">
            <a href="assets/pages/issue-post.php" class="create-post">create post</a>
        </div>
    </div>
</div>

<div class="center-element">
    <div class="dash-post-container">
        <!-- Left Page Nav -->
        <div class="l-page-nav">
            <button class="l-arrow">
                <img class="arrow-size" src="assets/images/buttons/next-page-left.svg">
            </button>
        </div>

        <!-- Post Grid -->
        <div class="grid">
            <?php
            /*
             * Dynamically outputs 12 posts by filling HTML template with DB data
             */
            $issuePostsArray = $db->getIssuePosts(); //get array of Issue posts from DB using controller

            //for each Post in the DB, display it on the page
            for($i=0; $i<1; $i++)
            {
                $statusImage = $db->queryStatusIcon($issuePostsArray[$i]->getStatus()); //get path to status image
                $watchIcon = $db->queryWatchIcon($issuePostsArray[$i]->getWatchId()); //get path to watch icon image

                echo '<article class="column-1-fourth">' .
                    '<div class="post-tile__header">
                			<img class="post-tile__status" src=' . $statusImage . '>
                			<img src="assets/images/icons/default-user-icon.svg" class="user-avatar">
                		</div>' .
                    '<div class="post-tile__body">
                		<p>' . substr($issuePostsArray[$i]->getContent(), 1, 15) . ' . . .</p>
                	</div>' .
                    '<footer>
                		<div class="post-tile__date"><time>'. $issuePostsArray[$i]->getTime(). '</time>
                		</div>
                		<div class="post-tile__watching"><img src='. $watchIcon .'>'. $issuePostsArray[$i]->getWatchCount().'</div>
                	</footer>
                </article>';
            }

            if(isset($_POST['commentContent']))
            {
                //TODO: in future, should grab postedByUserId param from session data

                //TODO store Post/Issue class object on page to have access to ID data
                $commentSectionId = $db->queryCommentSectionId(5, "issue");
                $comment = new Comment($_POST['commentContent'], 3, $commentSectionId);
                $db->insertComment($comment);
            }

            //Retrieve comment section and display each comment for post.
            $commentSection = $db->getCommentSection(5, "issue");
            foreach($commentSection->getComments() as $comment)
            {
                echo "<br>". $comment->getContent() . "<br>";
            }
            echo "<br><br>";

            ?>

            <div>

                <form action="" method="post">
                    Enter comment<br>
                    <input type="text" name="commentContent" placeholder="Enter comment...">
                    <br><br>
                    <input type="submit" value="Submit">
                </form>
            </div>
        </div>



        <!-- Right Page Nav -->
        <div class="r-page-nav">
            <button class="r-arrow">
                <img class="arrow-size" src="assets/images/buttons/next-page-right.svg">
            </button>
        </div>
        <div class="clear-floats"></div>
        <input class="page-num-container" placeholder="1" disabled>
    </div>
</div>

<!-- include google's jquery hosted library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="assets/scripts/main.js"></script>
</body>

</html>
