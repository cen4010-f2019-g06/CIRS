<?php
include_once '/home/cen4010fal19_g06/public_html/DBConnection.php';
include '/home/cen4010fal19_g06/public_html/checkLogin.php';

$advicePost = new Advice();
$advicePost->setContent($_POST['content']);
$advicePost->setPostedByUserId($_SESSION['userId']);
$advicePost->setPostedByZNum($_SESSION['znumber']);
$advicePost->setStatus(5);
$advicePost->setTime(date("Y-m-d"));
$advicePost->setWatchCount(0);
$advicePost->setUserIcon("/~cen4010fal19_g06/assets/images/icons/default-user-icon.svg");
$advicePost->setWatchId(1);


$db->insertAdvicePost($advicePost);
$db->createCommentSection($db->getLastAdviceId(), "advice");

header("Location: http://lamp.cse.fau.edu/~cen4010fal19_g06/assets/pages/view-advice.php?postId=". $db->getLastAdviceId());