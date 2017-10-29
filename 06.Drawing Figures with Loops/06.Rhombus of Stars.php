<?php

$n = trim( fgets( STDIN ) );

for ($i = 1; $i <= $n; $i++) {
    echo str_repeat( ' ', $n - $i );
    echo '*';
    for ($j = 0; $j < $i - 1; $j++) {
        echo " *";
    }
    echo PHP_EOL;
}
for ($i = $n - 1; $i > 0; $i--) {
    echo str_repeat( ' ', $n - $i );
    echo '*';
    for ($j = 0; $j < $i - 1; $j++) {
        echo " *";
    }
    echo PHP_EOL;
}