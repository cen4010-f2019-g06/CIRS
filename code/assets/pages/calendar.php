<?php include ("nav.php")?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../stylesheets/main.css">
    <link rel="stylesheet" href="https://use.typekit.net/xkf2xga.css">
    <script src="//cdn.ckeditor.com/4.13.0/basic/ckeditor.js"></script>
    <title>Calendar</title>
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
    
    <div class="calendar center-element">
        <table class="calendar-container">
            <caption class="calendar-month__large">November 2019</caption>
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
            <tr class="calendar-rows__large">
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="calendar-cell-row">1</td>
                <td class="calendar-cell-row">2</td>
                <td class="calendar-cell-row">3</td>
            </tr>
            <tr class="calendar-rows__large">
                <td class="calendar-cell-row">4</td>
                <td class="calendar-cell-row">5</td>
                <td class="calendar-cell-row">6</td>
                <td class="calendar-cell-row">7</td>
                <td class="calendar-cell-row">8</td>
                <td class="calendar-cell-row">9</td>
                <td class="calendar-cell-row">10</td>
            </tr>
            <tr class="calendar-rows__large">
                <td class="calendar-cell-row">11</td>
                <td class="calendar-cell-row">12</td>
                <td class="calendar-cell-row">13</td>
                <td class="calendar-cell-row">14</td>
                <td class="calendar-cell-row">15</td>
                <td class="calendar-cell-row">16</td>
                <td class="calendar-cell-row">17</td>
            </tr>
            <tr class="calendar-rows__large">
                <td class="calendar-cell-row">18</td>
                <td class="calendar-cell-row">19</td>
                <td class="calendar-cell-row">20</td>
                <td class="calendar-cell-row">21</td>
                <td class="calendar-cell-row">22</td>
                <td class="calendar-cell-row">23</td>
                <td class="calendar-cell-row">24</td>
            </tr>
            <tr class="calendar-rows__large">
                <td class="calendar-cell-row">25</td>
                <td class="calendar-cell-row">26</td>
                <td class="calendar-cell-row">27</td>
                <td class="calendar-cell-row">28</td>
                <td class="calendar-cell-row">29</td>
                <td class="calendar-cell-row">30</td>
                <td></td>
            </tr>
            </tbody>
        </table>

    </div>

    <!-- include google's jquery hosted library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="../scripts/main.js"></script>
</body>
</html>