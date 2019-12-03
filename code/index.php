<?php
include 'checkLogin.php';
include_once 'DBConnection.php';

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
        <a href="index.php"><img class="logo" src="assets/images/icons/logo-user.png"></a>

        <img src="assets/images/buttons/menu-collapsed.svg" class="menu-bttn" id="menu-closed" onclick="openNav()">

    <?php include ("/home/cen4010fal19_g06/public_html/assets/pages/searchbar.php"); ?>
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
    </div>

    <div class="center-element">
        <div class="dash-post-container">

            <!-- Post Grid -->
            <div class="grid">
                <?php
                /*
                 * Dynamically outputs 12 posts by filling HTML template with DB data
                 */

                $issuePostsArray = $db->getIssuePosts(); //get array of Issue posts from DB using controller

                //for each Post in the DB, display it on the page
                for($i=count($issuePostsArray)-1; $i>=count($issuePostsArray)-12; $i--)
                {
                    $statusImage = $db->queryStatusIcon($issuePostsArray[$i]->getStatus()); //get path to status image
                    $watchIcon = $db->queryWatchIcon($issuePostsArray[$i]->getWatchId()); //get path to watch icon image
                    $issueId = $issuePostsArray[$i]->getPostId();

                    echo '<article class="column-1-fourth">

                    <div class="post-tile__header">
                        <a href="assets/pages/view-issue.php?postId=' . $issueId . '">
                			<img class="post-tile__status" src=' . $statusImage . '>
                			<img src="assets/images/icons/default-user-icon.svg" class="user-avatar">
                		</div>' .
                        '<div class="post-tile__body">
                		<p>' . substr($issuePostsArray[$i]->getContent(), 0, 140) . ' . . .</p>
                	</div>' .
                       '<footer>
                		<div class="post-tile__date"><time>'. $issuePostsArray[$i]->getTime(). '</time>
                		</div>
                		<div class="post-tile__watching"><img src='. $watchIcon .'>'. $issuePostsArray[$i]->getWatchCount().'</div>
                	</footer>
                	</a>
                </article>';
                }
                ?>
				
				<div class="center-element">
					<div class="nav-tool">
						<!-- Left Page Nav -->
						<button class="l-arrow">
							<img class="arrow-size" src="assets/images/buttons/next-page-left.svg"></button>
						<input class="page-num-container" placeholder="1" disabled>
						<!-- Right Page Nav -->
						<button class="r-arrow">
								<img class="arrow-size" src="assets/images/buttons/next-page-right.svg"></button>
					</div>
				</div>
            </div>

            <!-- Advice Column -->
            <div class='advice-col-container'>
                <div class="create-post__outer">
                    <div class="create-post__inner">
                        <a href="assets/pages/issue-post.php" class="create-post">create post</a>
                    </div>
                </div>
            <?php
            $advicePostsArray = $db->getAdvicePosts(); //get array of posts from DB using controller

            for($i=0; $i<5; $i++)
                {
                    $adviceId = $advicePostsArray[$i]->getPostId();
                    $commentSection = $db->getCommentSection($adviceId, "advice");

                    echo    "   <div class='advice-col-box'>
                                <a href='assets/pages/view-advice.php?postId=" . $adviceId . "'>
                                    <img class='advice-icon' src='assets/images/icons/indicators/advice-indicator.svg'>
                                    <div class='advice-col-body'>" . $advicePostsArray[$i]->getContent() . "</div>
                                    <footer>
                                        <div class='advice-col__date'><time datetime='" . $advicePostsArray[$i]->getTime() . "'>" . $advicePostsArray[$i]->getTime() . "</time>
                                        </div>
                                        <div class='advice-col__comments'>" . $commentSection->getCount() . " comments<img class='comment-icon' src='assets/images/icons/comment-icon.svg'></div>
                                    </footer>
                                </a>
                                </div>
                            ";
                 }
            ?>
            </div>
        </div>
    </div>

    <!-- include google's jquery hosted library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="assets/scripts/main.js"></script>
</body>

</html>
