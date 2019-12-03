<!-- navigation to be inclued on all admin pages-->
<nav id="admin-menu-overlay" class="admin-main-nav">
    <header class="header-bar">
        <img src="../../images/buttons/admin-menu-expanded.svg" class="menu-bttn" onclick="closeAdminNav()">
    </header>
    <div class="admin__horizontal-line"></div>

    <div class="menu">
        <ul>
            <li>
                <a href="post-review.php" class="admin__menu-item">post review</a></li>
            <div class="admin__horizontal-line"></div>
            <li>
                <a href="flag-review.php" class="admin__menu-item">flag review</a></li>
            <div class="admin__horizontal-line"></div>
            <li>
                <a href="admin-account.php" class="admin__menu-item">my account</a></li>
            <div class="admin__horizontal-line"></div>
        </ul>
        <a href="/~cen4010fal19_g06/logoutUser.php" class=" admin-logout">Logout.</a>
    </div>
</nav>