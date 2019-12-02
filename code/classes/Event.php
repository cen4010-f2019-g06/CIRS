<?php
class Event extends Post
{
    private $location = "";
    private $eventDate = "";
    private $postedByUserId = "";
    private $status;

    public function getLocation()
    {
        return $this->location;
    }

    public function setLocation($location)
    {
        $this->location = $location;
    }

    public function getEventDate()
    {
        return $this->eventDate;
    }

    public function setEventDate($eventDate)
    {
        $this->eventDate = $eventDate;
    }

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