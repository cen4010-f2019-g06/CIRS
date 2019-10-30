<?php
/* Connect to a MySQL database using driver invocation */
$dsn = 'mysql:host=lamp.cse.fau.edu;dbname=cen4010fal19_g06';
$user = 'cen4010fal19_g06';
$password = 'nKg19Fa06';

try {
    $dbh = new PDO($dsn, $user, $password);
    echo($dbh);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

?>
