<?php
include "DBConnection.php";

$sql = 'SELECT * FROM users WHERE email="bad@example.com"';
$result = $dbh->query($sql);

if($result->rowCount()>0)
{
    $user = $result ->fetch();
    echo $user['email'].": ".$user['password'];

    $password = "testpassword";

    if(password_verify($password, $user['password']))
    {
        echo "<br>correct PW";
    }
}
else
{
    echo "No user exists with email";
}

