<?php


$amount = trim(fgets(STDIN));
$inputCurrency = trim(fgets(STDIN));
$outputCurrency = trim(fgets(STDIN));

$USD = 1.79549;
$EUR = 1.95583;
$GBP = 2.53405;
$BGN = 1;

$result = 0;

switch ($inputCurrency){
    case "USD":
        switch ($outputCurrency){
            case "EUR":
                $result = ($USD/$EUR) * $amount;
                break;
            case "GBP":
                $result = ($USD/$GBP) * $amount;
                break;
            case "BGN":
                $result = ($USD/$BGN) * $amount;
                break;
        }
        break;
    case "EUR":
        switch ($outputCurrency){
            case "USD":
                $result = ($EUR/$USD) * $amount;
                break;
            case "GBP":
                $result = ($EUR/$GBP) * $amount;
                break;
            case "BGN":
                $result = ($EUR/$BGN) * $amount;
                break;
        }
        break;
    case "GBP":
        switch ($outputCurrency){
            case "USD":
                $result = ($GBP/$USD) * $amount;
                break;
            case "EUR":
                $result = ($GBP/$EUR) * $amount;
                break;
            case "BGN":
                $result = ($GBP/$BGN) * $amount;
                break;
        }
        break;
    case "BGN":
        switch ($outputCurrency){
            case "USD":
                $result = ($BGN/$USD) * $amount;
                break;
            case "EUR":
                $result = ($BGN/$EUR) * $amount;
                break;
            case "GBP":
                $result = ($BGN/$GBP) * $amount;
                break;
        }
        break;

}
echo round($result,2). " $outputCurrency";