<?php
include 'DBConnection.php';

$name = "Test User";
$password = "testpassword";
$hashPW = password_hash($password, PASSWORD_DEFAULT);
$email = "testemail@example.com";

$data = [
    'name' => $name,
    'password' => $hashPW,
    'email' => $email,
];

$sql = "INSERT INTO users (name, password, email) 
        VALUES (:name, :password, :email)";

$stmt = $dbh->prepare($sql);
$stmt->execute($data);
