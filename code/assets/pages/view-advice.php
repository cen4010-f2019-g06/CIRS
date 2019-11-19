<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../../stylesheets/main.css">
    <link rel="stylesheet" href="https://use.typekit.net/xkf2xga.css">
    <title><!-- Question Substring? var --></title>
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
        <div class="user-container">
            <img class="icon" src="../../images/icons/default-user-icon.svg">
        </div>

        <div class="main-post-container">
            <div class="post-header" >
                <div class="tile-block">
                    <h3><img class="advice-post-indicator"src="../../images/icons/indicators/advice-indicator.svg">
                        <!-- advice question--></h3></div>
            </div>
            <div class="indicators">
                <time class="post-date"><!-- date var --></time>
                <input class="post-watch" type="image" src="../../images/icons/indicators/not-watching.svg" name="watching">
                <input class="post-flag" type="image" src="../../images/icons/flag.svg" name="flag">
            </div>
            
            <section class="comment-container__large center-element">
                <input class="post-comment" placeholder="Add a public comment...">
                <img class="comment-user-icon" src="../../images/icons/default-user-icon.svg">

                <h4 class="comment-header">Comments (<!-- commentcount var -->)</h4>
                <div class="comment-box">
                    <p class="comment-content"><span style="color: var(--faded-navy)"><!-- username var --></span> says:</p>
                    <p class="comment-content content-contain"><!-- comment var --></p>
                    <time class="comment-date"><!-- comment date --></time>
                </div>

                </section>
        </div>
    </div>

    <!-- include google's jquery hosted library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="../../scripts/main.js"></script>
    
</body>
</html>