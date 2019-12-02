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

        <?php include ("/home/cen4010fal19_g06/public_html/assets/pages/searchbar.php"); ?>

    </header>
    <div class="horizontal-line"></div>
    
    <div class="account-area">
        <div class="user-info">
            <fieldset>
                <div><img class="avatar" src="../images/icons/default-user-icon.svg"></div>
                <span class="center-element">choose an avatar</span>
                <div class="account-user" contenteditable="true" spellcheck="false">winkblink</div>             
            </fieldset>
        </div>

        <aside class="aside">
            <div class="account-main">
                <fieldset>
                    <div class="account-subfield">
                        <label class="account-field-label">Email</label>
                        <div class="account-field">nappletongue2015@fau.edu</div>
                    </div>  
                    
                    <div class="account-not-subfield">
                        <label class="account-field-label">Notification Preferences</label>
                        <fieldset class="notification-pref-opts">
                            
                            <span style="font-size: 18px;">My Posts</span>
                            <label class="switch" style="margin-left: 200px;">
                                <input type="checkbox" name="contact" value="my posts">
                                <span class="slider round"></span>
                            </label><br>
                            
                            <span style="font-size: 18px;">Watched Posts</span>
                            <label class="switch" style="margin-left: 155px">
                                <input type="checkbox" name="contact" value="my posts">
                                <span class="slider round"></span>
                            </label><br>
                            
                            <span style="font-size: 18px;">My Account</span>
                            <label class="switch" style="margin-left: 180px">
                                <input type="checkbox" name="contact" value="my posts">
                                <span class="slider round"></span>
                            </label><br>
                
                            <span style="font-size: 18px;">Never contact me for any reason</span>
                            <label class="switch">
                                <input type="checkbox" id="no-contact" value="my posts" onclick="disableOpt()">
                                <span class="slider round"></span>
                            </label><br>
                            
                        </fieldset>
                    </div> 
                    
                    <div class="account-subfield">
                        <label class="account-field-label">Display Settings</label>
                        <span style="font-size: 22px;">Log me out after
                            <select class="dropdown">
                                <option value="5">5</option>
                                <option value="15" selected>15</option>
                                <option value="30">30</option>
                                <option value="60">60</option>
                            </select> 
                            minutes of inactivity</span>
                    </div> 
                    
                    <div class="account-subfield">
                        <label class="account-field-label">My Posts</label>
                        <table class="account-post-table">
                            <tbody>
                                <tr>
                                    <td class="account-post-col__small content-cell">Sep 19<!-- date var date('M j Y')--></td>
                                    <td class="account-post-col__large content-cell">Lorem ipsum dolor sit amet.. <!-- content substr var --></td>
                                </tr>
                            </tbody>
                        </table>
                        <a href="#">See more</a>
                    </div> 
                </fieldset>
            </div>
        </aside>
    </div>
    
    <script src="../scripts/main.js"></script>
</body>
</html>