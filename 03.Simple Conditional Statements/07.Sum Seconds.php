<?php

$timeOne = trim(fgets(STDIN));
$timeTwo = trim(fgets(STDIN));
$timeThree = trim(fgets(STDIN));

$totalTime = $timeOne+$timeTwo+$timeThree;

if ($totalTime > 59){
    $timeInMinutes = ltrim(date('i:s',$totalTime), 0);
}
else{
    $timeInMinutes = date('I:s',$totalTime);
}

echo $timeInMinutes;
