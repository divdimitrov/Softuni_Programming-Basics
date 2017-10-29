<?php

$firstNum = trim(fgets(STDIN));
$secondNum = trim(fgets(STDIN));
$thirdNum = trim(fgets(STDIN));

if ($firstNum==$secondNum && $firstNum == $thirdNum){
    echo "yes";
}
else{
    echo "no";
}