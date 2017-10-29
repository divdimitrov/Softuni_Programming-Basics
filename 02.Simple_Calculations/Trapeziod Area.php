<?php
$b1 = trim(fgets(STDIN));
$b2 = trim(fgets(STDIN));
$h = trim(fgets(STDIN));

$area = ($b1+$b2) * $h/2;

echo $area;