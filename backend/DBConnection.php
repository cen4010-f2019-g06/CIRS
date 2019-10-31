<?php
include 'Credentials.php';

$user = $DB_USER;
$pass = $DB_PASSWORD;

try {
    $dbh = new PDO('mysql:host=localhost;dbname=cen4010-f2019-g06', $user, $pass);
    foreach($dbh->query('SELECT * from FOO') as $row) {
        print_r($row);
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>
