<?php
class Post
{
    //property declaration
    private $title ="";
    private $content ="";
    private $postedByZNum = "";
    private $time = "";
    private $watchId;
    private $watchCount = "";
    private $userIcon = "";

    //methods
    //getters and setters
    public function setTitle($title)
    {
        $this->title = $title;
    }
    public function getTitle()
    {
        return $this->title;
    }
    public function setContent($content)
    {
        $this->content = $content;
    }
    public function getContent()
    {
        return $this->content;
    }

    public function getPostedByZNum()
    {
        return $this->postedByZNum;
    }

    public function setPostedByZNum($postedByZNum)
    {
        $this->postedByZNum = $postedByZNum;
    }

    public function getTime()
    {
        return $this->time;
    }

    public function setTime($time)
    {
        $this->time = $time;
    }

    public function getWatchCount()
    {
        return $this->watchCount;
    }

    public function setWatchCount($watchCount)
    {
        $this->watchCount = $watchCount;
    }

    public function getUserIcon()
    {
        return $this->userIcon;
    }

    public function setUserIcon($userIcon)
    {
        $this->userIcon = $userIcon;
    }

    public function getWatchId()
    {
        return $this->watchId;
    }

    public function setWatchId($watchId)
    {
        $this->watchId = $watchId;
    }
}