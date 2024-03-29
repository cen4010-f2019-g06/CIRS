<?php
include '/home/cen4010fal19_g06/public_html/checkLogin.php';
include_once '/home/cen4010fal19_g06/public_html/DBConnection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../stylesheets/main.css">
    <link rel="stylesheet" href="https://use.typekit.net/xkf2xga.css">

    <title>Search Results</title>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-153783349-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-153783349-1');
    </script>

</head>

<body>
<?php
if(isset($_SESSION['adminId']))
{
    include ("/home/cen4010fal19_g06/public_html/assets/pages/admin-nav.php");
    echo'
        <header class="header-bar">
            <a href="/~cen4010fal19_g06/index.php"><img class="logo" src="/~cen4010fal19_g06/assets/images/icons/logo-admin.png"></a>
            <img src="/~cen4010fal19_g06/assets/images/buttons/admin-menu-collapsed.svg" class="menu-bttn" id="menu-closed" onclick="openAdminNav()">
        ';
}
else
{
    include ("/home/cen4010fal19_g06/public_html/assets/pages/nav.php");
    echo'
    <header class="header-bar">
        <a href="/~cen4010fal19_g06/index.php"><img class="logo" src="/~cen4010fal19_g06/assets/images/icons/logo-user.png"></a>
        <img src="/~cen4010fal19_g06/assets/images/buttons/menu-collapsed.svg" class="menu-bttn" id="menu-closed" onclick="openNav()">
        ';
}
?>

        <?php include ("/home/cen4010fal19_g06/public_html/assets/pages/searchbar.php"); ?>

    </header>
    <div class="horizontal-line"></div>

    <?php
    if(isset($_POST['query']))
    {
        $query = strtolower($_POST['query']);

        $issueResults = $db->searchIssuePosts($query);
        $eventResults = $db->searchEventPosts($query);
        $adviceResults = $db->searchAdvicePosts($query);

        $totalResults = count($issueResults) + count($eventResults) + count($adviceResults);

        $results = $db->searchIssuePosts($query);


        echo '
        <div class="center-element">
        <div class="search-post-container">
            <div class="search-result-header">
                <h3>Search results for "' . $query .'"</h3>
            </div>
            <div class="search-grid center-element">
        ';


        if($totalResults == 0)
        {
            echo "No search results";
        }
        else
        {
            echo $totalResults . " search results <br><br>";
            foreach($issueResults as $result)
            {
                $postUser = $db->getUserByZNumber($result->getPostedByZNum());
                echo '
                <!-- Search Item -->
                <div class="search-item-header">
                    <img class="search-user-icon" src="../images/icons/default-user-icon.svg">
                    <p class="search-user"><span style="color: var(--faded-navy)">'. $postUser['username'] . '</span></p>
                </div>
                
                <div class="search-item-body">
                    <a target="_blank" href="view-issue.php?postId='. $result->getPostId() .'">
                        <h3 class="search-title"> ' . $result->getTitle() . '</h3>
                        <p>' . $result->getContent() .'</p>
                    </a>
                </div>
                
                <div class="search-item-footer">
                    <time class="search-item-date">'. $result->getTime() . '</time>
                    <div class="search-item-watch" ><img src='. $db->queryWatchIcon($result->getWatchId()) . '>'. $result->getWatchCount() . '</div>
                </div>
                <div class="horizontal-line"></div>
                ';
            }
            foreach($eventResults as $result)
            {
                $postUser = $db->getUserByZNumber($result->getPostedByZNum());
                echo '
                <!-- Search Item -->
                <div class="search-item-header">
                    <img class="search-user-icon" src="../images/icons/default-user-icon.svg">
                    <p class="search-user"><span style="color: var(--faded-navy)">'. $postUser['username'] . '</span></p>
                </div>
                
                <div class="search-item-body">
                    <a target="_blank" href="view-event.php?postId='. $result->getPostId() .'">
                        <h3 class="search-title"> ' . $result->getTitle() . '</h3>
                        <p>' . $result->getContent() .'</p>
                    </a>
                </div>
                
                <div class="search-item-footer">
                    <time class="search-item-date">'. $result->getTime() . '</time>
                    <div class="search-item-watch" ><img src='. $db->queryWatchIcon($result->getWatchId()) . '>'. $result->getWatchCount() . '</div>
                </div>
                <div class="horizontal-line"></div>
                ';
            }
            foreach($adviceResults as $result)
            {
                $postUser = $db->getUserByZNumber($result->getPostedByZNum());
                echo '
                <!-- Search Item -->
                <div class="search-item-header">
                    <img class="search-user-icon" src="../images/icons/default-user-icon.svg">
                    <p class="search-user"><span style="color: var(--faded-navy)">'. $postUser['username'] . '</span></p>
                </div>
                
                <div class="search-item-body">
                    <a target="_blank" href="view-advice.php?postId='. $result->getPostId() .'">
                        <h3 class="search-title"> ' . $result->getTitle() . '</h3>
                        <p>' . $result->getContent() .'</p>
                    </a>
                </div>
                
                <div class="search-item-footer">
                    <time class="search-item-date">'. $result->getTime() . '</time>
                    <div class="search-item-watch" ><img src='. $db->queryWatchIcon($result->getWatchId()) . '>'. $result->getWatchCount() . '</div>
                </div>
                <div class="horizontal-line"></div>
                ';
            }
        }
    }
    ?>
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
    <script src="../scripts/main.js"></script>
</body>

</html>
