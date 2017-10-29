<?php

$n = trim( fgets( STDIN ) );
$num = 1;
for ($i = 0; $i <= $n; $i = $i + 2) {
    echo $num . PHP_EOL;
    $num = $num * 2 * 2;

}