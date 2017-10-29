<?php

$leap = trim( fgets( STDIN ) );
$p = (int)trim( fgets( STDIN ) );
$h = (int)trim( fgets( STDIN ) );

$days = 0;
$days += $h;
$normalWeekendPlays = ((48 - $h) / 4.00) * 3;
$days += $normalWeekendPlays;
$holidayPlays = ($p / 3.00) * 2;
$days += $holidayPlays;
if ($leap == "leap") {
    $days += ($days / 100.00) * 15;
}
echo floor($days);