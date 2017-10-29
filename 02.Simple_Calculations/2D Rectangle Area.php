<?php

$x1 = trim(fgets(STDIN));
$y1 = trim(fgets(STDIN));
$x2 = trim(fgets(STDIN));
$y2 = trim(fgets(STDIN));

$width = max($x1,$x2) - min($x1,$x2);
$height = max($y1,$y2) - min($y1,$y2);

$area = $height*$width;
$perimeter = 2 * ($height + $width);

echo $area . "\n";
echo $perimeter;