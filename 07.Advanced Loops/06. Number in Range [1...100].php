<?php

echo ("Enter Number in range 1 - 100 : ") . PHP_EOL;
$num = trim( fgets( STDIN ) );

while ($num < 1 || $num > 100) {
    echo ("Invalid number!") . PHP_EOL;
    $num = trim( fgets( STDIN ) );
}
echo "The number is: " . $num . PHP_EOL;