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
    
<body>
    <header class="header-bar">
        <a href="admin-login.php" class="login-redirect">Admin Login</a>
    </header>
    <div class="horizontal-line"></div>
    
    <div class="center-element">
        <div class="login-box--small">
            <h2 class="login-message">Hello again!</h2>

            <form action="/~cen4010fal19_g06/loginUser.php" method="post">
                <fieldset>
                    <div class="cred-label__align">
                        <label class="cred-label__email">Email</label></div>
                    <input class="cred-field" type="email" name="email" maxlength="25" required>

                    <div class="cred-label__align">
                        <label class="cred-label__pass">Password</label></div>
                    <input class="cred-field" type="password" name="password" required>
                </fieldset>

                <input class="stay-logged-in" id="remember-me" type="checkbox" value="Keep me signed in" onclick="rememberLoginMsg(this.id, 'remember-msg')">
                Keep me signed in

                <span id="remember-msg" style="font-size: 14px; color: var(--error-red); display: inline-block; visibility: hidden;">
                    Caution: You should not use this option while visting this site on a public computer.</span>

                <div class="horizontal-line"></div><br/>
                <input class="login-bttn" type="submit" value="Login">
            </form>
        </div>
        <div class="no-account">
            <span class="have-account">No account? 
                <span class="login"><a href="signup.php">Create one.</a></span>
            </span>
        </div>
    </div>
    
    <!-- include google's jquery hosted library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="../scripts/main.js"></script>
</body>
</html>