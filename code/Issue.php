<?php
class Issue extends Post
{
    private $status = "";
    private $adminReviews;

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
}
