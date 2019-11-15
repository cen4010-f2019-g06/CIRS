<body>
<form action="" method="post">
    <input type="text" name="znumber" placeholder="znumber" required>
    <input type="text" name="username" placeholder="username" required>
    <input type="text" name="password" placeholder="password" required>
    <input type="text" name="email" placeholder="email" required>
    <input type="submit" value="Submit">
</form>
</body>


<?php
include 'DBConnection.php';

if(!empty($_POST)) {
    $znumber = $_POST['znumber'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $hashPW = password_hash($password, PASSWORD_DEFAULT);
    $email = $_POST['email'];

    $data = [
        'znumber' => $znumber,
        'username' => $username,
        'password' => $hashPW,
        'email' => $email,
    ];

    $sql = "INSERT INTO users (znumber, username, password, email) 
        VALUES (:znumber, :username, :password, :email)";

    $stmt = $dbh->prepare($sql);
    $stmt->execute($data);
}





