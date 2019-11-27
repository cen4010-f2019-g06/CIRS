<?php
include 'Comment.php';
class CommentSection
{
    private $sectionId;
    private $postId;
    private $postType;
    private $comments = array();

    function __construct($postId, $postType, $sectionId)
    {
        $this->postId = $postId;
        $this->postType = $postType;
        $this->sectionId = $sectionId;
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