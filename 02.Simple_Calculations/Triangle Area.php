<?php

$side = trim(fgets(STDIN));
$height = trim(fgets(STDIN));

$area = $side * $height / 2;

echo round($area,2);