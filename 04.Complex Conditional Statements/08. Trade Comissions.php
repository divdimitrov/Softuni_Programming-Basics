<?php
declare(strict_types=1);

$city = trim( fgets( STDIN ) );
$sales = (float)trim( fgets( STDIN ) );

$bonus = 0.0;

switch ($city) {
    case "Sofia":
        if ($sales >= 0 && $sales <= 500) {
            $bonus = (5 / 100) * $sales;
        } elseif ($sales > 500 && $sales <= 1000) {
            $bonus = (7 / 100) * $sales;
        } elseif ($sales > 1000 && $sales <= 10000) {
            $bonus = (8 / 100) * $sales;
        } elseif ($sales > 10000) {
            $bonus = (12 / 100) * $sales;
        } elseif ($sales < 0) {
            echo "error";
            return;
        }
        break;
    case "Varna":
        if ($sales >= 0 && $sales <= 500) {
            $bonus = (4.5 / 100) * $sales;
        } elseif ($sales > 500 && $sales <= 1000) {
            $bonus = (7.5 / 100) * $sales;
        } elseif ($sales > 1000 && $sales <= 10000) {
            $bonus = (10 / 100) * $sales;
        } elseif ($sales > 10000) {
            $bonus = (13 / 100) * $sales;
        } elseif ($sales < 0) {
            echo "error";
            return;
        }
        break;
    case "Plovdiv":
        if ($sales >= 0 && $sales <= 500) {
            $bonus = (5.5 / 100) * $sales;
        } elseif ($sales > 500 && $sales <= 1000) {
            $bonus = (8 / 100) * $sales;
        } elseif ($sales > 1000 && $sales <= 10000) {
            $bonus = (12 / 100) * $sales;
        } elseif ($sales > 10000) {
            $bonus = (14.5 / 100) * $sales;
        } elseif ($sales < 0) {
            echo "error";
            return;
        }
        break;
    default:
        echo "error";
        return;

}
echo number_format( $bonus, 2,'.','' );