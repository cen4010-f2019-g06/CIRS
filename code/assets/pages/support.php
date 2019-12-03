<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../stylesheets/main.css">
    <link rel="stylesheet" href="https://use.typekit.net/xkf2xga.css">
    <title>Support</title>
    
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

    <div class="center-element">
        <div class="post-container">
            <h3 class="support-header">Tell us how we're doing</h3>

            <fieldset class="post-field-container__large">
                <div>
                    <label class="post-field-label">Name</label>
                    <input class="post-field" maxlength="30"></div>
                <div>
                    <label class="post-field-label tooltip">Email
                        <span class="tooltip-text">This allows us to contact you personally regarding your submission</span></label>
                    <input class="post-field" maxlength="25"></div>
            </fieldset>
                
            <div class="center-element">
                <textarea class="post-content--support" maxlength="500"></textarea>
            </div>

            <button class="submit-bttn">Submit</button>
        </div>
    </div>
    
    <!-- include google's jquery hosted library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="../scripts/main.js"></script>
</body>
</html>