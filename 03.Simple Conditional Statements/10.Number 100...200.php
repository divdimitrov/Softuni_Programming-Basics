<?php

$number = trim(fgets(STDIN));

if ($number<100){
    echo "Less than 100";
}
elseif ($number>=100 && $number<=200){
    echo "Between 100 and 200";
}
else{
    echo "Greater than 200";
}
