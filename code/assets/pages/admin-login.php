<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../stylesheets/main.css">
    <link rel="stylesheet" href="https://use.typekit.net/xkf2xga.css">
    <title>Login</title>
    <!--php:echo $title-->
</head>
    
<body class="admin-body">
    <header class="header-bar">
        <a href="signup.php" class="admin__login-redirect">User Login</a>
    </header>
    <div class="admin__horizontal-line"></div>
    
    <div class="center-element">
        <div class="login-box--small">
            <h2 class="admin__login-message">Welcome Administrator!</h2>
            
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
        </div>
    </div>
</body>
</html>