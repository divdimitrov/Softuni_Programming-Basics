<?php

$dollar = trim(fgets(STDIN));

$lev = $dollar * 1.79549;

echo round($lev,2)." BGN";