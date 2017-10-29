<?php

$product = trim(fgets(STDIN));
$city = trim(fgets(STDIN));
$quantity = trim(fgets(STDIN));

$total = 0;

switch ($city){
    case "Sofia":
        if ($product == "coffee"){
            $total = $quantity * 0.50;
        }elseif ($product == "water"){
            $total = $quantity * 0.80;
        }elseif ($product == "beer"){
            $total = $quantity * 1.20;
        }elseif ($product == "sweets"){
            $total = $quantity * 1.45;
        }elseif ($product == "peanuts"){
            $total = $quantity * 1.60;
        }
        break;
    case "Plovdiv":
        if ($product == "coffee"){
            $total = $quantity * 0.40;
        }elseif ($product == "water"){
            $total = $quantity * 0.70;
        }elseif ($product == "beer"){
            $total = $quantity * 1.15;
        }elseif ($product == "sweets"){
            $total = $quantity * 1.30;
        }elseif ($product == "peanuts"){
            $total = $quantity * 1.50;
        }
        break;
    case "Varna":
        if ($product == "coffee"){
            $total = $quantity * 0.45;
        }elseif ($product == "water"){
            $total = $quantity * 0.70;
        }elseif ($product == "beer"){
            $total = $quantity * 1.10;
        }elseif ($product == "sweets"){
            $total = $quantity * 1.35;
        }elseif ($product == "peanuts"){
            $total = $quantity * 1.55;
        }
        break;
}
echo $total;