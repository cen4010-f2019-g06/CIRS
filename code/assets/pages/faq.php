<?php include ("nav.php")?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../stylesheets/main.css">
    <link rel="stylesheet" href="https://use.typekit.net/xkf2xga.css">
    <title>FAQ</title>
    
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
    <script type="text/javascript" src="assets/js/open-close-nav.js"></script>
    <header class="header-bar">
        <a href="../../index.php"><img class="logo" src="../images/icons/logo-user.png"></a>
        <img src="../images/buttons/menu-collapsed.svg" class="menu-bttn" id="menu-closed" onclick="openNav()">

        <?php include ("/home/cen4010fal19_g06/public_html/assets/pages/searchbar.php"); ?>

    </header>
    <div class="horizontal-line"></div>

    <div class="faq-title">
        <h1>Frequently Asked Questions</h1>
        <div class="hl-spacing"></div>
        <div class="horizontal-line"></div>
    </div>  
    
    <div class="faq-container center-element">
        <div class="faq-q">
            <button class="accordion">How do I make my first post?</button>
        </div>
        <div class="faq-a">
            <p class="panel">In the dashboard, under the menu bar on the right hand side of the page, there is a "create post" button. This will automatically bring up an issue posting. However,  you can toggle between different post types in the top right corner.</p>
        </div>
    </div>
    <!-- include google's jquery hosted library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="../scripts/main.js"></script>
</body>
</html>