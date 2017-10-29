<?php

$a = trim(fgets(STDIN));
$b = trim(fgets(STDIN));
while ($b != 0)
{
    $oldB = $b;
    $b = $a % $b;
    $a = $oldB;
}
echo("GCD = " . $a);