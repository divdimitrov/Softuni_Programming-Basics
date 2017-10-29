<?php

$number = trim(fgets(STDIN));

$bonus = 0;


if ($number <=100){
    $bonus+=5;
}
elseif ($number >100 && $number <=1000){
    $bonus = (20 / 100) * $number;
}
else if($number>1000){
    $bonus = $number * 0.10;
}
if ($number%2 == 0){
    $bonus += 1;
}
if ($number % 10 == 5){
    $bonus +=2;
}

echo $bonus . "\n";
echo $number + $bonus;

