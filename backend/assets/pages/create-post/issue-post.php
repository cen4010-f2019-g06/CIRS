<?php include ("../../../nav.php")?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../../stylesheets/main.css">
    <link rel="stylesheet" href="https://use.typekit.net/xkf2xga.css">
    <script src="//cdn.ckeditor.com/4.13.0/basic/ckeditor.js"></script>
    <title>Issue</title>
    <!--php:echo $title-->
</head>
    
<body>
    <header class="header-bar">
            <a href="../../../index.php" class="logo">[cirs logo]</a>
            <img src="../../images/buttons/menu-collapsed.svg" class="menu-bttn" id="menu-closed" onclick="openNav()">

            <div class="search-bar">
                <img class="search-icon" src="../../images/icons/search-icon.svg">
                <input class="search" placeholder="Search" maxlength="200">
            </div>
    </header>
    <div class="horizontal-line"></div>
    
    <div class="post-type-sel">
        <button class="inactive-bttn post-type-bttn"><a href="advice-post.php">Advice</a></button>
        <button class="inactive-bttn post-type-bttn"><a href="event-post.php">Event</a></button>
        <button class="post-type-bttn"><a href="issue-post.php">Issue</a></button>
    </div>
        
    <div class="center-element">
        <div class="post-container--cp">
            <fieldset class="post-field-container__small">
                <div>
                    <label class="post-field-label tooltip">Description
                    <span class="tooltip-text__far">This will be the only thing users see when viewing your post from the dashboard</span></label>
                    <input class="post-field" maxlength="150"></div>             
            </fieldset>
            
            <div class="center-element">
                <textarea name="issue" maxlength="500"></textarea>
                <script>
                    CKEDITOR.replace('issue', {    
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

            <input class="anonymous" type="checkbox" value="anonymous">Post anonymously
            <button class="submit-bttn">Submit</button>
        </div>
    </div>
    
    <!-- include google's jquery hosted library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="../../scripts/main.js"></script>
</body>
</html>