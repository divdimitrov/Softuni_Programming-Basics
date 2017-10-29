<?php

$n = trim( fgets( STDIN ) );

for ($i = 1; $i <= $n; $i += 3) {
    echo $i.PHP_EOL;
}