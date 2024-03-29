<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../stylesheets/main.css">
    <link rel="stylesheet" href="https://use.typekit.net/xkf2xga.css">
    <title>Login</title>

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
    <header class="header-bar">
        <a href="signup.php" class="admin__login-redirect">User Login</a>
    </header>
    <div class="admin__horizontal-line"></div>
    
    <div class="center-element">
        <div class="login-box--small">
            <h2 class="admin__login-message">Welcome Administrator!</h2>

            <form action="/~cen4010fal19_g06/loginAdmin.php" method="post">
                <fieldset class="center-element">
                    <div class="cred-label__align">
                        <label class="admin__cred-label__email">Email</label></div>
                        <input class="admin__cred-field" type="email" name="email" maxlength="25" required>

                    <div class="cred-label__align">
                        <legend class="admin__cred-label__pass">Password</legend></div>
                    <input class="admin__cred-field" type="password" name="password" required>
                </fieldset>

                <fieldset>
                    <div class="hl-spacing"></div>
                    <div class="admin__horizontal-line"></div><br><br>
                    <input class="admin__login-bttn" type="submit" value="Login">
                </fieldset>
            </form>
        </div>
    </div>
</body>
</html>