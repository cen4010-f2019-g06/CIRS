<?php include ("nav.php")?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../stylesheets/main.css">
    <link rel="stylesheet" href="https://use.typekit.net/xkf2xga.css">
    <script src="//cdn.ckeditor.com/4.13.0/basic/ckeditor.js"></script>

    <title>Calendar</title>

    <!--Calendar stuff-->
    <style>
        h3 {
            margin-bottom: 30px;
        }
        th {
            height: 30px;
            text-align: center;
        }
        td {
            height: 100px;
        }
        .today {
            background: orange;
        }
        th:nth-of-type(1), td:nth-of-type(1) {
            color: red;
        }
        th:nth-of-type(7), td:nth-of-type(7) {
            color: blue;
        }
    </style>

</head>
    
<body>
    <!-- Header Bar-->
    <header class="header-bar">
            <a href="../../index.php" class="logo">[cirs logo]</a>
            <img src="../images/buttons/menu-collapsed.svg" class="menu-bttn" id="menu-closed" onclick="openNav()">

            <div class="search-bar">
                <img class="search-icon" src="../images/icons/search-icon.svg">
                <input class="search" placeholder="Search">
            </div>
    </header>
    <div class="horizontal-line"></div>
    

    
    <!--Calendar Stuff-->
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
    $html_title = date('Y / m', $timestamp);
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
    // Add empty cell
    $week .= str_repeat('<td></td>', $str);
    for ( $day = 1; $day <= $day_count; $day++, $str++) {
        
        $date = $ym . '-' . $day;
        
        if ($today == $date) {
            $week .= '<td class="today">' . $day;
        } else {
            $week .= '<td>' . $day; //this is where the events get inserted
        }
        $week .= '</td>';
        
        // End of the week OR End of the month
        if ($str % 7 == 6 || $day == $day_count) {
            if ($day == $day_count) {
                // Add empty cell
                $week .= str_repeat('<td></td>', 6 - ($str % 7));
            }
            $weeks[] = '<tr>' . $week . '</tr>';
            // Prepare for new week
            $week = '';
        }
    }
    ?>
    <div class="calendar center-element">
    <h3><a href="?ym=<?php echo $prev; ?>">&lt;</a> <?php echo $html_title; ?> <a href="?ym=<?php echo $next; ?>">&gt;</a></h3>
        <table class="calendar-container">
            <tr>
                <th>S</th>
                <th>M</th>
                <th>T</th>
                <th>W</th>
                <th>T</th>
                <th>F</th>
                <th>S</th>
            </tr>
            <?php
                foreach ($weeks as $week) {
                    echo $week;
                }
            ?>
        </table>
    </div>
    
    <br>
    <br>

    <!-- include google's jquery hosted library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="../scripts/main.js"></script>
</body>
</html>