<?php
declare(strict_types=1);

$fruit = trim( fgets( STDIN ) );
$day = trim( fgets( STDIN ) );
$quantity = (float)trim( fgets( STDIN ) );

$price = 0.0;
if ($day == "Monday" || $day == "Tuesday" || $day == "Wednesday" || $day == "Thursday" || $day == "Friday") {

    if ($fruit == "banana") {
        $price = $quantity * 2.50;
    } elseif ($fruit == "apple") {
        $price = $quantity * 1.20;
    } elseif ($fruit == "orange") {
        $price = $quantity * 0.85;
    } elseif ($fruit == "grapefruit") {
        $price = $quantity * 1.45;
    } elseif ($fruit == "kiwi") {
        $price = $quantity * 2.70;
    } elseif ($fruit == "pineapple") {
        $price = $quantity * 5.50;
    } elseif ($fruit == "grapes") {
        $price = $quantity * 3.85;
    } else {
        echo "error";
        return;
    }
    echo number_format( $price, 2 );
} elseif ($day == "Saturday" || $day == "Sunday") {
    if ($fruit == "banana") {
        $price = $quantity * 2.70;
    } elseif ($fruit == "apple") {
        $price = $quantity * 1.25;
    } elseif ($fruit == "orange") {
        $price = $quantity * 0.90;
    } elseif ($fruit == "grapefruit") {
        $price = $quantity * 1.60;
    } elseif ($fruit == "kiwi") {
        $price = $quantity * 3.00;
    } elseif ($fruit == "pineapple") {
        $price = $quantity * 5.60;
    } elseif ($fruit == "grapes") {
        $price = $quantity * 4.20;
    } else {
        echo "error";
        return;
    }
    echo number_format( $price, 2 );
} else {
    echo "error";
}

