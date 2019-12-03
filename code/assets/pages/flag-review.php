<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../stylesheets/main.css">
    <link rel="stylesheet" href="https://use.typekit.net/xkf2xga.css">
    <title>Post Review</title>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-153783349-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-153783349-1');
    </script>

</head>
    
<body class="admin-body">
    <?php include 'admin-nav.php'?>
    <header class="header-bar">
        <a href="../../index.php"><img class="logo" src="../images/icons/logo-admin.png"></a>
        <img src="../images/buttons/admin-menu-collapsed.svg" class="menu-bttn" id="menu-closed" onclick="openAdminNav()">

        <?php include ("/home/cen4010fal19_g06/public_html/assets/pages/searchbar.php"); ?>

    </header>
    <div class="admin__horizontal-line"></div>
    
    <div class="center-element" id="table-container">
    <table id="post-table">
        <thead>
            <tr>
                <th class="post-col__small content-cell">Post No.</th>
                <th class="post-col__large content-cell">Content</th>
                <th class="post-col__medium content-cell">Date</th>
                <th class="post-col__small content-cell">Review Count</th>

            </tr>
        </thead>
        <tbody class="post-body">
            <tr class="post-row">
                <td class="content-cell">Issue</td>
                <td class="content-cell">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore...</td>
                <td class="content-cell"><time>2019-10-30 15:23:56</time></td>
                <td></td>
            </tr>
            
            
        </tbody>

    </table>
    
    <input class="admin-page-num" placeholder="1">
    </div>
<!-- include google's jquery hosted library -->
    <!-- include google's jquery hosted library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="../scripts/main.js"></script>
</body>

</html>