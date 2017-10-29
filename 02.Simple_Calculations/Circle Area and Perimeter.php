<?php

$r = trim(fgets(STDIN));

$area = M_PI*$r*$r;

$perimeter = 2 * M_PI*$r;

echo $area . "\n";
echo $perimeter;