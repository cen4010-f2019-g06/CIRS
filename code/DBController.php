<?php
include 'Post.php';
include 'Issue.php';

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

    public function getIssuePosts()
    {
        $issuePosts = array();

        //query database for all posts and store in an array of type Post[]
        $sql = "SELECT title, content, time, watchCount, status, adminReviews, userIcon, watchIcon, postedByZNum FROM issues";
        foreach($this->connection->query($sql) as $row)
        {
            $issuePost = new Issue();
            $issuePost->setTitle($row['title']);
            $issuePost->setContent($row['content']);
            $issuePost->setPostedByZNum($row['postedByZNum']);
            $issuePost->setTime($row['time']);
            $issuePost->setWatchCount($row['watchCount']);
            $issuePost->setStatus($row['status']);
            $issuePost->setAdminReviews($row['adminReviews']);
            $issuePost->setUserIcon($row['userIcon']);
            $issuePost->setWatchIcon($row['watchIcon']);
            array_push($issuePosts, $issuePost);
        }
        return $issuePosts;
    }

    public function insertPost($post)
    {
        //determine post type.

        $data = [
            'title' => $post->getTitle(),
            'description' => $post->getDescription(),
        ];

        $sql = "INSERT INTO postTest (type, title, description) 
                    VALUES (:type, :title, :description)";

        $stmt = $this->connection->prepare($sql);
        $stmt->execute($data);
    }
}