<?php 
include_once '/home/cen4010fal19_g06/public_html/DBConnection.php';
include '/home/cen4010fal19_g06/public_html/checkLogin.php';

$issuePost = new Issue();
$issuePost->setTitle($_POST['title']);
$issuePost->setContent($_POST['content']);
$issuePost->setPostedByUserId($_SESSION['userId']);
$issuePost->setPostedByZNum($_SESSION['znumber']);
$issuePost->setStatus(0);
$issuePost->setTime(date("Y-m-d"));
$issuePost->setWatchCount(0);
$issuePost->setUserIcon("/~cen4010fal19_g06/assets/images/icons/default-user-icon.svg");
$issuePost->setWatchId(1);
$issuePost->setAdminReviews(0);

$db->insertIssuePost($issuePost);
$db->createCommentSection($db->getLastIssueId(), "issue");

header("Location: http://lamp.cse.fau.edu/~cen4010fal19_g06/assets/pages/view-issue.php?postId=". $db->getLastIssueId());