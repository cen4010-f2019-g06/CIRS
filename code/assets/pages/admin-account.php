<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../stylesheets/main.css">
    <link rel="stylesheet" href="https://use.typekit.net/xkf2xga.css">
    <title>My Account</title>
    
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
        <a href="../../index.html"><img class="logo" src="../images/icons/logo-admin.png"></a>
        <img src="../images/buttons/admin-menu-collapsed.svg" class="menu-bttn" id="menu-closed" onclick="openAdminNav()">

        <?php include ("/home/cen4010fal19_g06/public_html/assets/pages/searchbar.php"); ?>

    </header>
    <div class="admin__horizontal-line"></div>
    
    <div class="account-area">
        <div class="user-info">
            <fieldset>
                <div><img class="avatar" src="../images/icons/admin-default-user-icon.svg"></div>
                <span class="center-element" style="color: var(--burnt-mocha)">choose an avatar</span>
                <div class="account-user" contenteditable="true" spellcheck="false">winkblink</div>             
            </fieldset>
        </div>

            <div class="account-main">
                <fieldset>
                    <div class="admin-account-subfield">
                        <label class="account-field-label" style="color: var(--burnt-mocha)">Email</label>
                        <div class="admin-account-field">nappletongue2015@fau.edu</div>
                    </div>  
                    
                    <div class="admin-account-subfield">
                        <label class="account-field-label" style="color: var(--burnt-mocha)">Notification Preferences</label>
                        <fieldset class="notification-pref-opts">

                            <span style="font-size: 18px; color: var(--dark-mocha);">My Account</span>
                            <label class="admin-switch" style="margin-left: 180px">
                                <input type="checkbox" name="contact" value="my posts">
                                <span class="admin-slider round"></span>
                            </label><br>
                
                            <span style="font-size: 18px; color: var(--dark-mocha);">Never contact me for any reason</span>
                            <label class="admin-switch">
                                <input type="checkbox" id="no-contact" value="my posts" onclick="disableOpt()">
                                <span class="admin-slider round"></span>
                            </label><br>
                            
                        </fieldset>
                    </div> 
                    
                    <div class="admin-account-subfield">
                        <label class="account-field-label" style="color: var(--burnt-mocha)">Display Settings</label>
                        <span style="font-size: 22px; color: var(--dark-mocha)">Log me out after
                            <select class="admin-dropdown">
                                <option value="5">5</option>
                                <option value="15" selected>15</option>
                                <option value="30">30</option>
                                <option value="60">60</option>
                            </select> 
                            minutes of inactivity</span>
                    </div> 

                </fieldset>
            </div>
    </div>
    <!-- include google's jquery hosted library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="../scripts/main.js"></script>
</body>
</html>