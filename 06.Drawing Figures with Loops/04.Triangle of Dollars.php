<?php

$n = (int)trim( fgets( STDIN ) );

for ($i = 0; $i < $n; $i++) {
    echo "$ ";
    for ($j = 1; $j <= $i; $j++) {
        echo "$ ";
    }
    echo PHP_EOL;
}