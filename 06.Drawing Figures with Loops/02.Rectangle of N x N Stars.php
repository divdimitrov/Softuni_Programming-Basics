<?php

$n = (int)trim(fgets(STDIN));

for ($i = 0; $i < $n; $i++) {

    echo str_repeat( "*",$n);
    echo PHP_EOL;
}