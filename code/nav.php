<!-- navigation to be inclued on all pages-->
<nav id="menu-overlay" class="main-nav">
    <header class="header-bar">
        <img src="/assets/images/buttons/menu-expanded.svg" class="menu-bttn" id="menu-open" onclick="closeNav()">
    </header>
    <div class="horizontal-line"></div>

    <div class="creator-box">
        <h3 class="creators-info">Meet The Creators</h3>
        <div class="hl-spacing"></div>
        <div class="horizontal-line"></div>
        <ul class="creator-container">
            <li><img src="/assets/images/creators/grant-icon.png" class="creators-icon">
                <div class="creators-intro">
                    <p><?php include('assets/text/about-grant.txt');?></p>
                </div>
            </li> <!-- Grant -->
            <li><img src="/assets/images/creators/kevin-icon.png" class="creators-icon">
                <div class="creators-intro">
                    <p><?php include('assets/text/about-kevin.txt');?></p>
                </div>
            </li>
            <li><img src="/assets/images/creators/nicole-icon.png" class="creators-icon">
                <div class="creators-intro">
                    <p><?php include('assets/text/about-nicole.txt');?></p>
                </div>
            </li>
        </ul>
    </div>

    <div class="menu">
        <ul>
            <li>
                <a href="/index.php" class="menu-item">dashboard</a></li>
            <div class="horizontal-line"></div>
            <li>
                <a href="/assets/pages/menu-links/account.php" class="menu-item">my account</a></li>
            <div class="horizontal-line"></div>
            <li>
                <a href="/assets/pages/menu-links/calendar.php" class="menu-item">calendar</a></li>
            <div class="horizontal-line"></div>
            <li>
                <a href="/assets/pages/menu-links/support.php" class="menu-item">support</a></li>
            <div class="horizontal-line"></div>
            <li>
                <a href="/assets/pages/menu-links/faq.php" class="menu-item">faq</a></li>
            <div class="horizontal-line"></div>
        </ul>
        <a href="/assets/pages/login-protocol/signup.html" class="menu-item logout">Logout.</a>
    </div>
</nav>