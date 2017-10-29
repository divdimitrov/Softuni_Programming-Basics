<?php

$n = (float)trim( fgets( STDIN ) );

$OddSum = 0;
$OddMin = PHP_INT_MAX;
$OddMax = PHP_INT_MIN;
$EvenSum = 0;
$EvenMin = PHP_INT_MAX;
$EvenMax = PHP_INT_MIN;
$hasOdd = false;
$hasEven = false;

for ($i = 1; $i <= $n; $i++) {
    $num = (float)trim( fgets( STDIN ) );

    if ($i % 2 == 0) {
        $EvenSum += $num;
        $EvenMax = max( $EvenMax, $num );
        $EvenMin = min( $EvenMin, $num );
        $hasEven = true;
    } else {
        $OddSum += $num;
        $OddMax = max( $OddMax, $num );
        $OddMin = min( $OddMin, $num );
        $hasOdd = true;
    }
}

echo "OddSum=" . $OddSum . "," . "\n";
if ($hasOdd == true) {
    echo "OddMin=" . $OddMin . "," . "\n";
    echo "OddMax=" . $OddMax . "," . "\n";
} else {
    echo "OddMin = No" . "," . "\n";
    echo "OddMax = No," . "\n";
}
echo "EvenSum=" . $EvenSum . "," . "\n";
if ($hasEven == true) {
    echo "EvenMin=" . $EvenMin . "," . "\n";
    echo "EvenMax=" . $EvenMax;
} else {
    echo "EvenMin= No" . "," . "\n";
    echo "EvenMax=No";
}