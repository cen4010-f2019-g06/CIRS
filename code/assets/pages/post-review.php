<?php

include '/home/cen4010fal19_g06/public_html/checkLogin.php';
include_once '/home/cen4010fal19_g06/public_html/DBConnection.php';

if(!isset($_SESSION['adminId']))
{
    header("Location: http://lamp.cse.fau.edu/~cen4010fal19_g06/");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../stylesheets/main.css">
    <link rel="stylesheet" href="https://use.typekit.net/xkf2xga.css">
    <title>Post Review</title>
</head>
    
<body class="admin-body">
    <?php include 'admin-nav.php'?>
    <header class="header-bar">
        <a href="../../index.html"><img class="logo" src="../images/icons/logo-admin.png"></a>
        <img src="../images/buttons/admin-menu-collapsed.svg" class="menu-bttn" id="menu-closed" onclick="openAdminNav()">

        <?php include ("/home/cen4010fal19_g06/public_html/assets/pages/searchbar.php"); ?>

    </header>
    <div class="admin__horizontal-line"></div>
    
    <div class="center-element" id="table-container">
    <table id="post-table">
        <thead>
            <tr>
                <th class="post-col__small content-cell">Post No.</th>
                <th class="post-col__medium content-cell">Status</th>
                <th class="post-col__large content-cell">Content</th>
                <th class="post-col__medium content-cell">Date</th>
                <th class="post-col__small content-cell">Review Issue</th>
            </tr>
        </thead>
        <tbody class="post-body">
        <?php

        $issuePostsArray = $db->getIssuePosts();

        foreach($issuePostsArray as $issue)
        {
            $statusImage = $db->queryStatusIcon($issue->getStatus()); //get path to status image
            echo'

            <tr class="post-row">
                <td class="content-cell">' . $issue->getPostId() . '</td>
                <td><img class="status-cell" src='. $statusImage . '> </td>
                <td class="content-cell">' . $issue->getContent() . '</td>
                <td class="content-cell"><time>' . $issue->getTime() . '</time></td>
                <td class="content-cell"><a href="admin-view-post.php?postId='. $issue->getPostId() . '">Review</a></td>
            </tr>
            
            ';
        }

        ?>
            <tr class="post-row">
                <td class="content-cell"><!-- post type var --></td>
                <td><img class="status-cell" src="../images/icons/status/status-pending.svg"></td>
                <td class="content-cell"><!-- post content var --></td>
                <td class="content-cell"><time><!--  date var --></time></td>
            </tr>
        </tbody>

    </table>
    
    <input class="admin-page-num" placeholder="1">
    </div>
<!-- include google's jquery hosted library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="../scripts/main.js"></script>
</body>

</html>