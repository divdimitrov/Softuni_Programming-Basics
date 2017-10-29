<?php

$n = (int)trim( fgets( STDIN ) );
$result = 0;
for ($i = 0; $i < $n; $i++) {
    $number = (int)trim( fgets( STDIN ) );

    $result += $number;
}
echo $result;
