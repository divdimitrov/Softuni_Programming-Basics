<?php

$n = (int)trim( fgets( STDIN ) );
$leftSum = 0;
$rightSum = 0;

for ($i = 0; $i < $n; $i++) {
    $num = (int)trim( fgets( STDIN ) );

    $leftSum = $leftSum + $num;
}
for ($i = 0; $i < $n; $i++) {
    $num = (int)trim( fgets( STDIN ) );

    $rightSum = $rightSum + $num;
}

$sum = abs( $rightSum - $leftSum );

if ($sum == 0) {
    echo "Yes, sum = " . $leftSum;
} else {
    echo "No, diff = " . $sum;
}