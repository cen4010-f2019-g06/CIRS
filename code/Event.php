<?php
class Event extends Post
{
    private $location = "";
    private $eventDate = "";

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