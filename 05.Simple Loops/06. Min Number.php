<?php

$n = (int)trim( fgets( STDIN ) );
$min = PHP_INT_MAX;

for ($i = 0; $i < $n; $i++) {
    $number = (int)trim( fgets( STDIN ) );
    $min = min( $min, $number );
}
echo $min;