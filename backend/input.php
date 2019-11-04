<!DOCTYPE html>
<html>
<head>
    <title>CIRS</title>
</head>

<body>

<?php
    class DBController
    {
        //property declaration
        public $type = "";
        public $title ="";
        public $description ="";

        //methods
        //getters and setters
        public function setType($type)
        {
            $this->type = $type;
        }
        public function getType()
        {
            return $this->type;
        }
        public function setTitle($title)
        {
            $this->title = $title;
        }
        public function getTitle()
        {
            return $this->title;
        }
        public function setDescription($description)
        {
            $this->description = $description;
        }
        public function getDescription()
        {
            return $this->description;
        }


    }

    $post = new DBController();
    $post->setType($_POST['type']);
    $post->setTitle($_POST['title']);
    $post->setDescription($_POST['description']);

    $type = $_POST['type'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    
    echo $post->getType() . '<br><br>';
    echo $post->getTitle() . '<br><br>';
    echo $post->getDescription() . '<br><br>';
    //echo $title . '<br><br>';
    //echo $description . '.' . '<br><br>';
    
?>

</body>
</html>
