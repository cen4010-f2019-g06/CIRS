<?php include ("../../../nav.php")?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../../stylesheets/main.css">
    <link rel="stylesheet" href="https://use.typekit.net/xkf2xga.css">
    <title>Support</title>
    <!--php:echo $title-->
</head>

<body>
    <header class="header-bar">
        <a href="../../../index.php" class="logo">[cirs logo]</a>
        <img src="../../images/buttons/menu-collapsed.svg" class="menu-bttn" id="menu-closed" onclick="openNav()">

        <div class="search-bar">
            <img class="search-icon" src="../../images/icons/search-icon.svg">
            <input class="search" placeholder="Search">
        </div>
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
    <script src="../../scripts/main.js"></script>
</body>
</html>