<?php include ("nav.php")?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../stylesheets/main.css">
    <link rel="stylesheet" href="https://use.typekit.net/xkf2xga.css">
    <script src="//cdn.ckeditor.com/4.13.0/basic/ckeditor.js"></script>
    <title>Issue</title>
    
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
    <header class="header-bar">
        <a href="../../index.html"><img class="logo" src="../images/icons/logo-user.png"></a>
        <img src="../images/buttons/menu-collapsed.svg" class="menu-bttn" id="menu-closed" onclick="openNav()">

        <?php include ("/home/cen4010fal19_g06/public_html/assets/pages/searchbar.php"); ?>

    </header>
    <div class="horizontal-line"></div>
    
    <div class="post-type-sel">
        <button class="inactive-bttn post-type-bttn"><a href="advice-post.php">Advice</a></button>
        <button class="inactive-bttn post-type-bttn"><a href="event-post.php">Event</a></button>
        <button class="post-type-bttn"><a href="issue-post.php">Issue</a></button>
    </div>
        
    <div class="center-element">
        <form action = "issue-posted.php" method = "POST">
            <div class="post-container--cp">
                <fieldset class="post-field-container__small">
                    <div>
                        <label class="post-field-label tooltip">Description
                        <span class="tooltip-text__far">This will be the only thing users see when viewing your post from the dashboard</span></label>
                        <input class="post-field" name="title" placeholder="Title..." maxlength="150"></div>             
                </fieldset>
                
                <div class="center-element">
                    <textarea class="post-content--advice" name="content" placeholder="Description..." maxlength="100"></textarea>
                </div>
                <!--
                <div class="center-element">
                    <textarea name="content" maxlength="500"></textarea>
                    <script>
                        CKEDITOR.replace('content', {    
                            height: 400,
                            width: 555,
                            toolbarGroups: [
                                {"name": "basicstyles", "groups": ["basicstyles"]},
                                {"name": "links",       "groups": ["links"]},
                                {"name": "paragraph",   "groups": ["list"]},
                                {"name": "document",    "groups": ["mode", "document", "doctools"]},
                                {"name": "insert",      "groups": ["insert"]},
                            ],
                            // Remove the redundant buttons from toolbar groups defined above.
                            removeButtons: 'Subscript,Superscript,Anchor'
                        });
                    </script>
                </div>
                    -->
                <input class="anonymous" type="checkbox" value="anonymous">Post anonymously
                <button class="submit-bttn" input type="submit">Submit</button>
            </div>
        </form>
    </div>
    
    <!-- include google's jquery hosted library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="../scripts/main.js"></script>
</body>
</html>