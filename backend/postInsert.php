<body>
<form action="" method="post">
    <input type="text" name="content" placeholder="content" required>
    <input type="text" name="znumber" placeholder="znumber" required>
    <input type="text" name="userID" placeholder="userID" required>
    <input type="text" name="watching" placeholder="watching" required>





    <input type="submit" value="Submit">
</form>
</body>


<?php
include 'DBConnection.php';

if(!empty($_POST)) {
    $znumber = $_POST['znumber'];
    $content = $_POST['content'];
    $userID = $_POST['userID'];
    $time = new DateTime();
    $time = $time->format('Y-m-d H:i:s');
    $watching = $_POST['watching'];


    $data = [
        'znumber' => $znumber,
        'content' => $content,
        'userID' => $userID,
        'time' => $time,
        'watching' => $watching,
    ];

    $sql = "INSERT INTO events (postedByUserId, postedByZNum, content, time, watching) 
        VALUES (:userID, :znumber, :content, :time, :watching)";

    $stmt = $dbh->prepare($sql);
    $stmt->execute($data);
}
