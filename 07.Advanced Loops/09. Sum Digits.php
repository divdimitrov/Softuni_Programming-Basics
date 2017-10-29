<?php

$n = trim( fgets( STDIN ) );
$sum = 0;
do {
    $sum = $sum + ($n % 10);
    $n = $n / 10;
} while ($n > 0);
echo("Sum of digits: " . $sum);