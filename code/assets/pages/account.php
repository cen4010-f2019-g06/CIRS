<?php include ("nav.php")?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../stylesheets/main.css">
    <link rel="stylesheet" href="https://use.typekit.net/xkf2xga.css">
    <title>My Account</title>
    <!--php:echo $title-->
</head>
    
<body>
    <header class="header-bar">
        <a href="../../index.php" class="logo">[cirs logo]</a>
        <img src="../images/buttons/menu-collapsed.svg" class="menu-bttn" id="menu-closed" onclick="openNav()">

        <div class="search-bar">
            <img class="search-icon" src="../images/icons/search-icon.svg">
            <input class="search" placeholder="Search">
        </div>
    </header>
    <div class="horizontal-line"></div>
    
    <div class="account-area">
        <div class="user-info">
            <fieldset>
                <div class="avatar"></div>
                <input class="account-user" maxlength="150">             
            </fieldset>
        </div>

        <aside class="aside">
            <div class="account-main">
                <fieldset>
                    <div class="account-subfield">
                        <label class="account-field-label">Email</label>
                        <input class="account-field" maxlength="150">
                    </div>  
                    <div class="account-subfield">
                        <label class="account-field-label">Notification Preferences</label>
                        <fieldset class="notification-pref-opts">
                            <input type="checkbox" value="my posts" checked>My Posts
                            <input type="checkbox" value="watched posts" checked>Watched Posts
                            <input type="checkbox" value="my account" checked>My Account<br>
                            <input type="checkbox" value="no contact">Never contact me for any reason
                        </fieldset>
                    </div> 
                    <div class="account-subfield">
                        <label class="account-field-label">Display Settings</label>
                        <input class="account-field" maxlength="150">
                    </div> 
                    <div class="account-subfield">
                        <label class="account-field-label">My Posts</label>
                        <table>
                            <thead>
                                <th>Date</th>
                                <th>Content</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div> 
                </fieldset>
            </div>
        </aside>
    </div>
    <!-- include google's jquery hosted library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="../scripts/main.js"></script>
</body>
</html>