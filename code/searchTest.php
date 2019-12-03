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
        <a href="index.php" class="logo">[cirs logo]</a>
        <img src="assets/images/buttons/menu-collapsed.svg" class="menu-bttn" id="menu-closed" onclick="openNav()">

        <div class="search-bar">
            <form action="" method="post">
                <img class="search-icon" src="assets/images/icons/search-icon.svg">
                <input type="text" name="query" class="search" placeholder="Search" maxlength="200">
                <input type="submit" value="Search">
            </form>
        </div>
    </header>
    <div class="horizontal-line"></div>

    <?php
    if(isset($_POST['query']))
    {
        $query = strtolower($_POST['query']);

        $results = $db->searchIssuePosts($query);

        if(count($results) == 0)
        {
            "No search results";
        }
        else
        {
            echo count($results) . " search results <br>";
            foreach($results as $result)
            {
                echo $result->getContent();
                echo "<br>";
            }
        }
    }
    ?>
</body>

