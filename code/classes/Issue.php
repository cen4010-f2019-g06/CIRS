<?php
class Issue extends Post
{
    private $status;
    private $adminReviews;
    private $postedByUserId = "";

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

    public function getPostedByUserId()
    {
        return $this->postedByUserId;
    }

    public function setPostedByUserId($postedByUserId)
    {
        $this->postedByUserId = $postedByUserId;
    }
}
