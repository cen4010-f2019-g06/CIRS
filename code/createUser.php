<?php

include '/home/cen4010fal19_g06/public_html/DBController.php';
include '/home/cen4010fal19_g06/public_html/Credentials.php';
$db = new DBController($DB_USER, $DB_PASSWORD); //Establish connection to DB with controller

if(!empty($_POST)) {
    $username = $_POST['username'];
    $znumber = $_POST['znumber'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $hashPW = password_hash($password, PASSWORD_DEFAULT);

    $db->insertUser($username, $znumber, $email, $hashPW);
    header("Location: http://lamp.cse.fau.edu/~cen4010fal19_g06/assets/pages/signupSuccess.php");
    exit();
}
?>
