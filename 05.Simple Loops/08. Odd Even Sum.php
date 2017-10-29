<?php

$n = (int)trim( fgets( STDIN ) );

$oddSum = 0;
$evenSum = 0;

for ($i = 1; $i <= $n; $i++) {
    $num = (int)trim( fgets( STDIN ) );

    if ($i % 2 == 0) {
        $evenSum += $num;
    } else {
        $oddSum += $num;
    }
}
if ($oddSum == $evenSum) {
    echo "Yes" . "\n";
    echo "Sum = " . $oddSum;
} else {
    echo "No" . "\n";
    echo "Diff = " . abs( $evenSum - $oddSum );
}
