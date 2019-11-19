<?php
include 'Credentials.php';
include 'DBController.php';

try {
    //Establish connection to DB with controller
    $db = new DBController($DB_USER, $DB_PASSWORD);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>
