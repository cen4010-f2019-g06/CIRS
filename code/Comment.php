<?php
class Comment
{
    private $content;
    private $postedByUserId;
    private $time;
    private $upvotes = 0;
    private $downvotes = 0;

    function __construct($content, $postedByUserId)
    {
        $this->content = $content;
        $this->postedByUserId = $postedByUserId;
        //create new datetime
        $this->time = new DateTime();
        $this->time = $this->time->format('Y-m-d H:i:s');
    }

    public function getContent()
    {
        return $this->content;
    }

    public function setContent($content)
    {
        $this->content = $content;
    }

    public function getPostedByUserId()
    {
        return $this->postedByUserId;
    }

    public function setPostedByUserId($postedByUserId)
    {
        $this->postedByUserId = $postedByUserId;
    }

    public function getTime()
    {
        return $this->time;
    }

    public function setTime($time)
    {
        $this->time = $time;
    }

    public function getUpvotes()
    {
        return $this->upvotes;
    }

    public function setUpvotes($upvotes)
    {
        $this->upvotes = $upvotes;
    }

    public function getDownvotes()
    {
        return $this->downvotes;
    }

    public function setDownvotes($downvotes)
    {
        $this->downvotes = $downvotes;
    }
}