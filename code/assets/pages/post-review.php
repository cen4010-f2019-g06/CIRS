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
        <a href="../../index.php" class="logo">[cirs logo]</a>
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
            </tr>
        </thead>
        <tbody class="post-body">
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