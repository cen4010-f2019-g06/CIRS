<?php
class Advice extends Post
{
    private $postedByUserId = "";
    private $status = "";

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
}