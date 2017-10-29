<?php

$n = trim( fgets( STDIN ) );
$num = 1;
while ($num <= $n) {
    echo $num . PHP_EOL;
    $num = 2 * $num + 1;

}