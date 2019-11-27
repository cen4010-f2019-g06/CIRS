<?php
session_start();
checkLogin();

function checkLogin()
{
    if (isset($_SESSION['userId'])) {

    } else {
        // Redirect to the login page
        header("Location: http://lamp.cse.fau.edu/~cen4010fal19_g06/assets/pages/login.php");
    }
}