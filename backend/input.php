<!DOCTYPE html>
<html>
<head>
    <title>CIRS</title>
</head>

<body>

<?php
    $post = $_POST['post'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    
    echo $post . '<br><br>';
    echo $title . '<br><br>';
    echo $description . '.' . '<br><br>';
    
?>

</body>
</html>
