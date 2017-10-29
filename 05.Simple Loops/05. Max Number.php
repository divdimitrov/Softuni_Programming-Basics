<?php

$n = (int)trim( fgets( STDIN ) );
$max = PHP_INT_MIN;

for ($i = 0; $i < $n; $i++) {
    $number = (int)trim( fgets( STDIN ) );
    $max = max( $max, $number );
}
echo $max;