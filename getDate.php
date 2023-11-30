<?php
// Get the current date
$today = getdate();

// Get the day, month, and year
$day = $today['mday'];
$month = $today['mon'];
$year = $today['year'];

// Get the name of the month
$monthName = date('F', mktime(0, 0, 0, $month, 1, $year));

// Display on the screen
echo "$day  $monthName  $year";
?>