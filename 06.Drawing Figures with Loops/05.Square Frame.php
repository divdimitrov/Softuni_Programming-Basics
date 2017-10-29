<?php

$n = trim( fgets( STDIN ) );

echo "+ ";
for ($i = 0; $i < $n - 2; $i++) {
    echo "- ";
}
echo "+" . PHP_EOL;

for ($i = 0; $i < $n - 2; $i++) {
    echo "| ";
    for ($j = 0; $j < $n - 2; $j++) {
        echo "- ";
    }
    echo "|" . PHP_EOL;
}
echo "+ ";
for ($i = 0; $i < $n - 2; $i++) {
    echo "- ";
}
echo "+" . PHP_EOL;
