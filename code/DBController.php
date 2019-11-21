<?php
include 'Post.php';
include 'Issue.php';
include 'Advice.php';
include 'Event.php';
include 'CommentSection.php';

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

    /*
     * Queries the database table "issues" to retrieve all posts and store in an array
     * composed of Issue objects (subclass of Post class)
     * @return array of Issue posts
    */
    public function getIssuePosts()
    {
        $issuePosts = array();

        $sql = "SELECT issueId, title, content, time, watchCount, status, adminReviews, userIcon, watchId, postedByZNum 
                FROM issues";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();

        foreach($stmt->fetchAll() as $row)
        {
            $issuePost = new Issue();
            $issuePost->setPostId($row['issueId']);
            $issuePost->setTitle($row['title']);
            $issuePost->setContent($row['content']);
            $issuePost->setPostedByZNum($row['postedByZNum']);
            $issuePost->setTime($row['time']);
            $issuePost->setWatchCount($row['watchCount']);
            $issuePost->setStatus($row['status']);
            $issuePost->setAdminReviews($row['adminReviews']);
            $issuePost->setUserIcon($row['userIcon']);
            $issuePost->setWatchId($row['watchId']);
            array_push($issuePosts, $issuePost);
        }

        return $issuePosts;
    }

    /*
    * Queries the database table "advice" to retrieve all posts and store in an array
    * composed of Advice objects (subclass of Post class)
    * @return array of Advice posts
    */
    public function getAdvicePosts()
    {
        $advicePosts = array();

        $sql = "SELECT adviceId, title, content, time, watchCount, userIcon, watchId, postedByZNum 
                FROM advice";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();

        foreach($stmt->fetchAll() as $row)
        {
            $advicePost = new Advice();
            $advicePost->setPostId($row['adviceId']);
            $advicePost->setTitle($row['title']);
            $advicePost->setContent($row['content']);
            $advicePost->setPostedByZNum($row['postedByZNum']);
            $advicePost->setTime($row['time']);
            $advicePost->setWatchCount($row['watchCount']);
            $advicePost->setUserIcon($row['userIcon']);
            $advicePost->setWatchId($row['watchId']);
            array_push($advicePosts, $advicePost);
        }

        return $advicePosts;
    }

    /*
    * Queries the database table "events" to retrieve all posts and store in an array
    * composed of Event objects (subclass of Post class)
    * @return array of Event posts
    */
    public function getEventPosts()
    {
        $eventPosts = array();

        $sql = "SELECT eventId, title, content, time, watchCount, userIcon, watchId, postedByZNum, location, eventDate 
                FROM events";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();

        foreach($stmt->fetchAll() as $row)
        {
            $eventPost = new Event();
            $eventPost->setPostId($row['eventId']);
            $eventPost->setTitle($row['title']);
            $eventPost->setContent($row['content']);
            $eventPost->setPostedByZNum($row['postedByZNum']);
            $eventPost->setTime($row['time']);
            $eventPost->setWatchCount($row['watchCount']);
            $eventPost->setUserIcon($row['userIcon']);
            $eventPost->setWatchId($row['watchId']);
            $eventPost->setLocation($row['location']);
            $eventPost->setEventDate($row['eventDate']);

            array_push($eventPosts, $eventPost);
        }

        return $eventPosts;
    }

    public function insertAdvicePost($advice)
    {
        $data = [
            'postedByUserId' => $advice->getPostedByUserId(),
            'postedByZNum' => $advice->getPostedByZNum(),
            'status' => $advice->getStatus(),
            'content' => $advice->getContent(),
            'userIcon' => $advice->getUserIcon(),
            'time' => $advice->getTime(),
            'watchId' => $advice->getWatchId(),
            'watchCount' => $advice->getWatchCount(),
            'commentCount' => $advice->getCommentCount(),
        ];

        $sql = "INSERT INTO advice (postedByUserId, postedByZNum, status, content, userIcon, time, watchId, watchCount, commentCount)
                    VALUES (:postedByUserId, :postedByZNum, :status, :content, :userIcon, :time, :watchId, :watchCount, :commentCount)";
        
        $stmt = $this->connection->prepare($sql);
        $stmt->execute($data);
    }

    public function insertIssuePost($issue)
    {
        $data = [
            'title' => $issue->getTitle(),
            'postedByUserId' => $issue->getPostedByUserId(),
            'postedByZNum' => $issue->getPostedByZNum(),
            'status' => $issue->getStatus(),
            'content' => $issue->getContent(),
            'userIcon' => $issue->getUserIcon(),
            'time' => $issue->getTime(),
            'watchId' => $issue->getWatchId(),
            'watchCount' => $issue->getWatchCount(),
            'adminReviews' => $issue->getAdminReviews(),
        ];

        $sql = "INSERT INTO issues (title, postedByUserId, postedByZNum, content, time, watchCount, status, adminReviews, userIcon, watchId)
                    VALUES (:title, :postedByUserId, :postedByZNum, :content, :time, :watchCount, :status, :adminReviews, :userIcon, :watchId)";
        
        $stmt = $this->connection->prepare($sql);
        $stmt->execute($data);
    }

    public function insertEventPost($event)
    {
        $data = [
            'title' => $event->getTitle(),
            'postedByUserId' => $event->getPostedByUserId(),
            'postedByZNum' => $event->getPostedByZNum(),
            'status' => $event->getStatus(),
            'content' => $event->getContent(),
            'userIcon' => $event->getUserIcon(),
            'time' => $event->getTime(),
            'watchId' => $event->getWatchId(),
            'watchCount' => $event->getWatchCount(),
            'location' => $event->getLocation(),
            'eventDate' => $event->getEventDate(),
        ];

        $sql = "INSERT INTO events (title, postedByUserId, postedByZNum, status, content, userIcon, time, watchId, watchCount, location, eventDate)
                    VALUES (:title, :postedByUserId, :postedByZNum, :status, :content, :userIcon, :time, :watchId, :watchCount, :location, :eventDate)";
        
        $stmt = $this->connection->prepare($sql);
        $stmt->execute($data);
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

    //This function queries the database and returns the path to a status image.
    //Takes parameter of the statusId number value
    public function queryStatusIcon($statusValue)
    {
        $sql = 'SELECT statusIcon 
                FROM status 
                WHERE statusId ='.$statusValue;

        $result = $this->connection->query($sql)->fetch();
        return $result[0];
    }

    //This function queries the database and returns the path to a watchIcon image.
    //Takes parameter of the watchId number value
    public function queryWatchIcon($watchValue)
    {
        $sql = 'SELECT watchIcon 
                FROM watchIcon 
                WHERE watchId ='.$watchValue;

        $result = $this->connection->query($sql)->fetch();
        return $result[0];
    }

    public function insertComment($comment)
    {
        $data = [
            'content'=>$comment->getContent(),
            'postedByUserId'=>$comment->getPostedByUserId(),
            'time'=>$comment->getTime(),
            'upvotes'=>$comment->getUpvotes(),
            'downvotes'=>$comment->getDownvotes(),
            'sectionId'=>$comment->getSectionId(),
        ];

        $sql = "INSERT INTO comments (content, postedByUserId, time, upvotes, downvotes, sectionId)
                VALUES (:content, :postedByUserId, :time, :upvotes, :downvotes, :sectionId)";

        $stmt = $this->connection->prepare($sql);
        $stmt->execute($data);
    }

    public function queryCommentSectionId($postId, $postType)
    {
        $sql = "SELECT sectionId 
                FROM commentSections 
                WHERE postId = ".$postId.
                " AND postType = '". $postType . "'";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_BOTH);
        return $result[0];
    }

    public function getCommentSection($postId, $postType)
    {
        $sectionId = $this->queryCommentSectionId($postId, $postType);

        $commentSection = new CommentSection($postId, $postType, $sectionId);

        $sql = "SELECT * 
                FROM comments
                WHERE sectionId = ". $sectionId;
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();

        foreach($stmt->fetchAll() as $row)
        {
            $comment = new Comment($row['content'], $row['postedByUserId'], $row['sectionId']);
            $comment->setTime($row['time']);
            $comment->setUpvotes($row['upvotes']);
            $comment->setDownvotes($row['downvotes']);

            $commentSection->addComment($comment);
        }

        return $commentSection;
    }
}