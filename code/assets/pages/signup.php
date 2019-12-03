<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../stylesheets/main.css">
    <link rel="stylesheet" href="https://use.typekit.net/xkf2xga.css">
    <title>Sign Up</title>
    
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
        <a href="admin-login.php" class="login-redirect">Admin Login</a>
    </header>
    <div class="horizontal-line"></div>
    
    <div class="center-element">
        <div class="login-box--large">
            <h2 class="login-message">Welcome!</h2>

            <form action="/~cen4010fal19_g06/createUser.php" method="post">
                <fieldset>
                    <div class="cred-label__align">
                        <label class="cred-label__email">Username</label></div>
                    <input class="cred-field" type="text" name="username" maxlength="20" required>

                    <div class="cred-label__align">
                        <label class="cred-label__email">Z Number</label></div>
                    <input class="cred-field" type="text" name="znumber" maxlength="8" required>

                    <div class="cred-label__align">
                        <label class="cred-label__email">Email</label></div>
                    <input class="cred-field" type="email" name="email" maxlength="25" required>

                    <div class="cred-label__align">
                        <label class="cred-label__pass">Password</label></div>
                    <input class="cred-field" type="password" name="password" required>
                </fieldset>

                <div class="hl-spacing"></div>
                <div class="horizontal-line"></div>

                <fieldset class="login-action">
                    <input class="login-bttn" type="submit" value="Sign Up">
                </fieldset>
            </form>

            <span class="have-account">Already have an account? 
                <span class="login"><a href="login.php">Login.</a></span>
            </span>
        </div>
    </div>
</body>
</html>
