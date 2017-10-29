<?php

$celsius = trim(fgets(STDIN));

$fahrenheit = $celsius * 1.8 + 32;

echo round($fahrenheit,2);