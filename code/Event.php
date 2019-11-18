<?php
class Event extends Post
{
    private $watchCount;
    private $location = "";
    private $eventDate = "";

    public function getWatchCount()
    {
        return $this->watchCount;
    }


    public function setWatchCount($watchCount)
    {
        $this->watchCount = $watchCount;
    }

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
}