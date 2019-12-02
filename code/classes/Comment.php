<?php
class Comment
{
    private $content;
    private $postedByUserId;
    private $sectionId;
    private $time;
    private $upvotes = 0;
    private $downvotes = 0;

    function __construct($content, $postedByUserId, $sectionId)
    {
        $this->content = $content;
        $this->postedByUserId = $postedByUserId;
        $this->sectionId = $sectionId;
        //create new datetime
        $this->time = new DateTime("now");
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

    public function getTimeDB()
    {
        return $this->time->format('Y-m-d H:i:s');
    }

    public function getTime()
    {
        return $this->time->format('h:i a m/d/Y');
    }

    public function setTime($time)
    {
        $this->time = new DateTime($time);
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

    public function getSectionId()
    {
        return $this->sectionId;
    }
}