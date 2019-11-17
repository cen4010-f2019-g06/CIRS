<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../../stylesheets/main.css">
    <link rel="stylesheet" href="https://use.typekit.net/xkf2xga.css">
    <title>Login</title>
    <!--php:echo $title-->
</head>
    
<body>
    <header class="header-bar">
        <a href="admin-login.html" class="login-redirect">Admin Login</a>
    </header>
    <div class="horizontal-line"></div>
    
    <div class="center-element">
        <div class="login-box--small">
            <h2 class="login-message">Hello again!</h2>
            
            <fieldset>
                <div class="cred-label__align">
                    <label class="cred-label__email">Email</label></div>
                <input class="cred-field" type="email" name="email" maxlength="25" required>
                    
                <div class="cred-label__align">
                    <label class="cred-label__pass">Password</label></div>
                <input class="cred-field" type="password" name="password" required>
            </fieldset>
            
            
            <fieldset>
                <input class="stay-logged-in" type="checkbox" value="Keep me signed in">Keep me signed in<br>
                <div class="horizontal-line"></div><br>
                <input class="login-bttn" type="submit" value="Login"> 
            </fieldset>
        </div>
        <div class="no-account">
            <span class="have-account">No account? 
                <span class="login"><a href="signup.html">Create one.</a></span>
            </span>
        </div>
    </div>
</body>
</html>