<?php

$input = trim(fgets(STDIN));

switch ($input){

    case "square":
        $side = trim(fgets(STDIN));
        echo round($side*$side,3);
        break;
    case "rectangle":
        $firstSide = trim(fgets(STDIN));
        $secondSide = trim(fgets(STDIN));
        echo round($firstSide*$secondSide,3);
        break;
    case "circle":
        $r = trim(fgets(STDIN));
        echo round((M_PI * $r * $r),3);
        break;
    case "triangle":
        $firstSide = trim(fgets(STDIN));
        $secondSide = trim(fgets(STDIN));
        echo round(($firstSide*$secondSide)/2,3);
        break;
}