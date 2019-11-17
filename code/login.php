<?php
include 'DBConnection.php';
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CEN 4010 - Group 6</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/general.css">

</head>
<body>
    <form action="" method="post">
        <input type="text" name="email" placeholder="Enter your email" required>
        <input type="password" name="password" placeholder="Enter your password" required>
        <input type="submit" value="Submit">
    </form>
</body>

<?php
session_start();

if(!empty($_POST)) {
    if (isset($_POST['email']) && isset( $_POST['password']))
    {
        $sql = 'SELECT * FROM users WHERE email="'.$_POST['email'].'"';
        $result = $dbh->query($sql);

        if($result->rowCount()>0)
        {
            $user = $result ->fetch();

            if(password_verify($_POST['password'], $user['password']))
            {
                $_SESSION['email'] = $user['email'];
                $_SESSION['userId'] = $user['userId'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['userId'] = $user['userId'];

                header("Location: http://lamp.cse.fau.edu/~cen4010fal19_g06/");
            }
            else
            {
                echo "<br> Incorrect email/password combination";
            }
        }
        else
        {
            echo "<br>No user exists with given email";
        }
    }
}