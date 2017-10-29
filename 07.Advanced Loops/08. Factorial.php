<?php

$n = trim(fgets(STDIN));
$fact = 1;
do
{
    $fact = $fact * $n;
    $n--;
} while ($n > 1);
echo ($fact);