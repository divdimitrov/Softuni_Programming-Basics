<?php

$n = trim( fgets( STDIN ) );

$stars = str_repeat( '*', 2 * $n );
$space = str_repeat( ' ', $n );

echo($stars);
echo($space);
echo ($stars) . PHP_EOL;

for ($i = 0; $i < $n - 2; $i++) {
    if ($i == ($n - 1) / 2 - 1) {
        echo("*");
        echo str_repeat( '/', 2 * $n - 2 );
        echo("*");
        echo str_repeat( '|', $n );
        echo("*");
        echo str_repeat( '/', 2 * $n - 2 );
        echo ("*") . PHP_EOL;
    } else {
        echo("*");
        echo str_repeat( '/', 2 * $n - 2 );
        echo("*");
        echo($space);
        echo("*");
        echo str_repeat( '/', 2 * $n - 2 );
        echo ("*") . PHP_EOL;
    }
}
echo($stars);
echo($space);
echo ($stars) . PHP_EOL;


