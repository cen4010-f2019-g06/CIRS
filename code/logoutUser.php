<?php
include 'checkLogin.php';
session_destroy();
header("Location: http://lamp.cse.fau.edu/~cen4010fal19_g06/assets/pages/login.php");