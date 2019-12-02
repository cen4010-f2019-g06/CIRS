<?php
session_start();
checkLogin();

function checkLogin()
{
    if (isset($_SESSION['userId']))
    {
        //session variable used to check if user logged in is admin or not
        $_SESSION['isAdmin'] = false;
    } elseif (isset($_SESSION['adminId']))
    {
        //session variable used to check if user logged in is admin or not
        $_SESSION['isAdmin'] = true;
    } else {
        // No session variables set for a logged in user, redirect to login page
        header("Location: http://lamp.cse.fau.edu/~cen4010fal19_g06/assets/pages/login.php");
    }
}