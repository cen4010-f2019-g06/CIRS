<?php
include 'Credentials.php';

$user = $DB_USER;
$pass = $DB_PASSWORD;

try {
    $dbh = new PDO('mysql:host=localhost;dbname=cen4010fal19_g06', $user, $pass);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>
