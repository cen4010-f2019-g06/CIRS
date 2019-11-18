<?php
class Issue extends Post
{
    private $watchCount = "";
    private $status = "";
    private $adminReviews;
    private $userIcon = "";
    private $watchIcon = "";

    public function getWatchCount()
    {
        return $this->watchCount;
    }

    public function setWatchCount($watchCount)
    {
        $this->watchCount = $watchCount;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function getAdminReviews()
    {
        return $this->adminReviews;
    }

    public function setAdminReviews($adminReviews)
    {
        $this->adminReviews = $adminReviews;
    }

    public function getUserIcon()
    {
        return $this->userIcon;
    }


    public function setUserIcon($userIcon)
    {
        $this->userIcon = $userIcon;
    }

    public function getWatchIcon()
    {
        return $this->watchIcon;
    }

    public function setWatchIcon($watchIcon)
    {
        $this->watchIcon = $watchIcon;
    }
}
