<?php
session_start();

include_once 'DBConnection.php';

if(!empty($_POST))
{
    $email = $_POST['email'];
    $password = $_POST['password'];

    if($db->verifyAdmin($email, $password))
    {
        $admin = $db->getAdmin($email);

        $_SESSION['email'] = $admin['email'];
        $_SESSION['adminId'] = $admin['adminId'];
        $_SESSION['username'] = $admin['username'];


        header("Location: http://lamp.cse.fau.edu/~cen4010fal19_g06/");
        exit();
    }
    else
    {
        echo "hi";
    }
}