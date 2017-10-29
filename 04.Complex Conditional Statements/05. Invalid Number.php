<?php

$number = (int)trim(fgets(STDIN));

$valid = ($number >=100 && $number <=200) || $number == 0;

if (!$valid){
    echo "invalid";
}