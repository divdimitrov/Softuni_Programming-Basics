<?php

$n = trim( fgets( STDIN ) );
$num = 1;
for ($row = 1; $row <= $n; $row++) {
    for ($col = 1; $col <= $row; $col++) {
        if ($col > 1) echo(" ");
        echo($num);
        $num++;
        if ($num > $n) break;
    }
    echo PHP_EOL;
    if ($num > $n) break;
}