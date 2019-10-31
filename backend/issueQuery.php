<?php
include "DBConnection.php";

$sql = 'SELECT content FROM issues';

foreach ($dbh->query($sql) as $row) {
    print $row['content'] . "\n";
}