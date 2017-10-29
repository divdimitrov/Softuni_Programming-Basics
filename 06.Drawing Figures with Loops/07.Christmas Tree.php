<?php

$n = trim( fgets( STDIN ) );
for ($i = 0; $i <= $n; $i++) {
    $stars = str_repeat( '*', $i );
    $spaces = str_repeat( ' ', $n - $i );
    echo $spaces;
    echo $stars;
    echo " | ";
    echo $stars;
    echo $spaces . PHP_EOL;
}