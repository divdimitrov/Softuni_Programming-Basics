<?php

$n = (int)trim( fgets( STDIN ) );
$sum = 0;
$maxNum = 0;
for ($i = 0; $i < $n; $i++) {

    $num = (int)trim( fgets( STDIN ) );
    $sum += $num;
    if ($num > $maxNum) {
        $maxNum = $num;
    }
}
if ($maxNum == $sum / 2) {
    echo "Yes" . "\n";
    echo "Sum = " . $maxNum;
} else {
    echo "No" . "\n";
    echo "Diff = " . abs( $maxNum - ($sum - $maxNum) );
}
