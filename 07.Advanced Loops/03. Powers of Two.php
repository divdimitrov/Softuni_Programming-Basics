<?php

$n = trim( fgets( STDIN ) );
$num = 1;
for ($i = 0; $i <= $n; $i++) {
    echo $num .PHP_EOL;
    $num = $num * 2;

}