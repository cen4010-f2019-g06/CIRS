<?php
class Advice extends Post
{
    private $postedByUserId = "";
    private $status = "";
    private $commentCount;

    public function getPostedByUserId()
    {
        return $this->postedByUserId;
    }

    public function setPostedByUserId($postedByUserId)
    {
        $this->postedByUserId = $postedByUserId;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function getCommentCount()
    {
        return $this->commentCount;
    }

    public function setCommentCount($commentCount)
    {
        $this->commentCount = $commentCount;
    }
}