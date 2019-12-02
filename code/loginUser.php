<?php
session_start();

include_once 'DBConnection.php';

if(!empty($_POST))
{
    $email = $_POST['email'];
    $password = $_POST['password'];

    if($db->verifyUser($email, $password))
    {
        $user = $db->getUser($email);

        $_SESSION['email'] = $user['email'];
        $_SESSION['userId'] = $user['userId'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['znumber'] = $user['zNumber'];
        $_SESSION['notificationPref'] = $user['notificationPref'];
        $_SESSION['postCount'] = $user['postCount'];

        header("Location: http://lamp.cse.fau.edu/~cen4010fal19_g06/");
        exit();
    }
    else
    {
        //TODO redirect to login page with error
    }
}