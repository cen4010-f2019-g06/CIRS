<?php 
include ("nav.php");
include_once ("/home/cen4010fal19_g06/public_html/DBConnection.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../stylesheets/main.css">
    <link rel="stylesheet" href="https://use.typekit.net/xkf2xga.css">
    <script src="//cdn.ckeditor.com/4.13.0/basic/ckeditor.js"></script>
    <title>Calendar</title>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-153783349-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-153783349-1');
    </script>

</head>
    
<body>
    <!-- Header Bar-->
    <header class="header-bar">
            <a href="../../index.php"><img class="logo" src="../images/icons/logo-user.png"></a>
            <img src="../images/buttons/menu-collapsed.svg" class="menu-bttn" id="menu-closed" onclick="openNav()">

        <?php include ("/home/cen4010fal19_g06/public_html/assets/pages/searchbar.php"); ?>

    </header>
    <div class="horizontal-line"></div>
    
    <?php
        // Set your timezone
        date_default_timezone_set('America/New_York');
        // Get prev & next month
        if (isset($_GET['ym'])) {
            $ym = $_GET['ym'];
        } else {
            // This month
            $ym = date('Y-m');
        }
        // Check format
        $timestamp = strtotime($ym . '-01');
        if ($timestamp === false) {
            $ym = date('Y-m');
            $timestamp = strtotime($ym . '-01');
        }
        // Today
        $today = date('Y-m-j', time());
        // For H3 title
        $html_title = date('F Y', $timestamp);
        // Create prev & next month link
        $prev = date('Y-m', mktime(0, 0, 0, date('m', $timestamp)-1, 1, date('Y', $timestamp)));
        $next = date('Y-m', mktime(0, 0, 0, date('m', $timestamp)+1, 1, date('Y', $timestamp)));

        // Number of days in the month
        $day_count = date('t', $timestamp);

        // 0:Sun 1:Mon 2:Tue ...
        $str = date('w', mktime(0, 0, 0, date('m', $timestamp), 1, date('Y', $timestamp)));

        // Create Calendar
        $weeks = array();
        $week = '';
        
        
        //Create array of events
        //convert date using strtotime
        $eventPostsArray = $db->getEventPosts();
        foreach ($eventPostsArray as $element){
            $date = strtotime($element->getEventDate());
            $element->setEventDate($date);
        }
        
        // Add empty cell
        $week .= str_repeat('<td class="calendar-cell-row"></td>', $str);
        for ( $day = 1; $day <= $day_count; $day++, $str++) {

            $date = $ym . '-' . $day;
            $dayStartTime = strtotime($date);
            $dayEndTime = strtotime($date . " 23:59:59");

            $post1 = "";
            $count = 0; //count for multiple posts in a day
            $eventId = 0;
            foreach ($eventPostsArray as $element){
                if ($element->getEventDate() >= $dayStartTime && $element->getEventDate() <= $dayEndTime){
                    $post1 = $element->getTitle();
                    $count++;
                    $eventId = $element->getPostId();
                }
            }
            //adds an ... to the date to show there are multiple events that day
            if ($count > 1){
                $post1 .= "<br /> ...";
            }
            

            if ($today == $date) {
                $week .= "<td class='current-date calendar-cell-row'><a href='view-event.php?postId=" . $eventId . "'>" . $day . '<br /><br />' . $post1;
            } else {
                $week .= "<td class='calendar-cell-row'><a href='view-event.php?postId=" . $eventId . "'>" . $day . '<br /><br />' . $post1;
            }
            $week .= '</td>';
            //<a href='assets/pages/view-advice.php?postId=" . $adviceId . "'>
            // End of the week OR End of the month
            if ($str % 7 == 6 || $day == $day_count) {
                if ($day == $day_count) {
                    // Add empty cell
                    $week .= str_repeat('<td class="calendar-cell-row"></td>', 6 - ($str % 7));
                }
                $weeks[] = '<tr class="calendar-rows__large">' . $week . '</tr>';
                // Prepare for new week
                $week = '';
            }
        }
        ?>
    
        <div class="calendar center-element">        
                <div class="calendar-nav center-element">
                   <a href="?ym=<?php echo $next; ?>">
                        	<button class="calendar-r-arrow">
                            		<img class="arrow-size" src="../images/buttons/next-page-right.svg"></button></a>
                	<a href="?ym=<?php echo $prev; ?>">
                        	<button class="calendar-l-arrow">
                            		<img class="arrow-size" src="../images/buttons/next-page-left.svg"></button></a>
                </div>
            <table class="calendar-container">
                <caption class="calendar-month__large"><?php echo $html_title; ?></caption>
                <thead>
                    <tr>
                        <th class="calendar-col__large calendar-cell" scope="col">Mon</th>
                        <th class="calendar-col__large calendar-cell" scope="col">Tues</th>
                        <th class="calendar-col__large calendar-cell" scope="col">Wed</th>
                        <th class="calendar-col__large calendar-cell" scope="col">Thurs</th>
                        <th class="calendar-col__large calendar-cell" scope="col">Fri</th>
                        <th class="calendar-col__large calendar-cell" scope="col">Sat</th>
                        <th class="calendar-col__large calendar-cell" scope="col">Sun</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($weeks as $week) {
                            echo $week;
                        }
                    ?>
                </tbody>
            </table>
        </div>
   
    <!-- include google's jquery hosted library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="../scripts/main.js"></script>
</body>
</html>