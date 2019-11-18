<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../stylesheets/main.css">
    <link rel="stylesheet" href="https://use.typekit.net/xkf2xga.css">
    <title>Sign Up</title>
    <!--php:echo $title-->
</head>
    
<body>
    <header class="header-bar">
        <a href="admin-login.php" class="login-redirect">Admin Login</a>
    </header>
    <div class="horizontal-line"></div>
    
    <div class="center-element">
        <div class="login-box--large">
            <h2 class="login-message">Welcome!</h2>
            
            <fieldset>
                <div class="cred-label__align">
                    <label class="cred-label__email">Username</label></div>
                <input class="cred-field" type="text" name="username" maxlength="20" required>
                
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
                <button class="login-bttn" name="signup">Sign Up</button>
            </fieldset>
            
            <span class="have-account">Already have an account? 
                <span class="login"><a href="login.php">Login.</a></span>
            </span>
        </div>
    </div>
</body>
</html>