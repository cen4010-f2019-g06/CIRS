<?php
include_once '/home/cen4010fal19_g06/public_html/DBConnection.php';
include '/home/cen4010fal19_g06/public_html/checkLogin.php';

$eventPost = new Event();
$eventPost->setTitle($_POST['title']);
$eventPost->setPostedByUserId($_SESSION['userId']);
$eventPost->setPostedByZNum($_SESSION['znumber']);
$eventPost->setStatus(5);
$eventPost->setContent($_POST['content']);
$eventPost->setUserIcon("/~cen4010fal19_g06/assets/images/icons/default-user-icon.svg");
$eventPost->setTime(date("Y-m-d H:i:s"));
$eventPost->setWatchId(2);
$eventPost->setWatchCount(0);
$eventPost->setLocation($_POST['location']);
$eventPost->setEventDate($_POST['date'] . ' ' . $_POST['time']);

$db->insertEventPost($eventPost);
$db->createCommentSection($db->getLastEventId(), "event");

header("Location: http://lamp.cse.fau.edu/~cen4010fal19_g06/assets/pages/view-event.php?postId=". $db->getLastEventId());