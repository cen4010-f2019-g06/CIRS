<?php
include 'Comment.php';
class CommentSection
{
    private $sectionId;
    private $postId;
    private $postType;
    private $comments = array();
    private $commentCount = 0;

    function __construct($postId, $postType, $sectionId)
    {
        $this->postId = $postId;
        $this->postType = $postType;
        $this->sectionId = $sectionId;
    }

    public function incrementCount()
    {
        $this->commentCount++;
    }

    public function getCount()
    {
        return $this->commentCount;
    }

    public function getComments()
    {
        return $this->comments;
    }

    public function getPostId()
    {
        return $this->postId;
    }

    public function setPostId($postId)
    {
        $this->postId = $postId;
    }

    public function addComment($comment)
    {
        array_push($this->comments, $comment);
    }
}