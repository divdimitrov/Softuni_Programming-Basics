<?php
$n = (int)trim( fgets( STDIN ) );
$currSum = 0;
$prevSum = 0;
$diff = 0;
$maxDiff = 0;
for ($i = 0; $i < $n; $i++) {
    $prevSum = $currSum;
    $currSum = 0;
    $currSum += (int)trim( fgets( STDIN ) );
    $currSum += (int)trim( fgets( STDIN ) );
    if ($i != 0) {
        $diff = abs( $currSum - $prevSum );
        if ($diff != 0 && $diff > $maxDiff) {
            $maxDiff = $diff;
        }
    }
}
if ($prevSum == $currSum || $n == 1) {
    echo "Yes, value=", $currSum;
} else {
    echo "No, maxdiff=", $maxDiff;
}