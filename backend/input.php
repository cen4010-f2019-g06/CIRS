<!DOCTYPE html>
<html>
<head>
    <title>CIRS</title>
</head>

<body>

<?php
    include 'Credentials.php'; //Database credentials stored in separate file not being push to repo for security practices

    class DBController
    {
        private $connection;

        public function __construct($DB_USER, $DB_PASSWORD)
        {
            try {
                $this->connection = new PDO('mysql:host=localhost;dbname=cen4010fal19_g06', $DB_USER, $DB_PASSWORD);
            } catch (PDOException $e) {
                print "Error!: " . $e->getMessage() . "<br/>";
                die();
            }
        }

        public function insertUser($name, $password, $email)
        {
            $data = [
                'name' => $name,
                'password' => $password,
                'email' => $email,
            ];
            $sql = "INSERT INTO users (name, password, email) 
                    VALUES (:name, :password, :email)";

            $stmt = $this->connection->prepare($sql);
            $stmt->execute($data);
        }

        public function queryUser($email, $password)
        {
            //query database to check if the email/password combination exists (login)

            //if exists return true
            //if not exists return false
        }

        public function getPosts()
        {
            //query database for all posts and store in an array of type Post[]

        }

        public function insertPost($post)
        {
            $data = [
                'type' => $post->getType(),
                'title' => $post->getTitle(),
                'description' => $post->getDescription(),
            ];

            $sql = "INSERT INTO postTest (type, title, description) 
                    VALUES (:type, :title, :description)";

            $stmt = $this->connection->prepare($sql);
            $stmt->execute($data);
        }



    }

    class Post
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


    $db = new DBController($DB_USER, $DB_PASSWORD);
    
    $post = new Post();
    $post->setType("Event");
    $post->setTitle("Party");
    $post->setDescription("Good times.");

    $db->insertPost($post);

    //echo $post->getType() . '<br><br>';
    //echo $post->getTitle() . '<br><br>';
    //echo $post->getDescription() . '<br><br>';
    //echo $title . '<br><br>';
    //echo $description . '.' . '<br><br>';
    
?>

</body>
</html>