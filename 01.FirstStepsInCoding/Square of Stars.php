<?php

$n = trim(fgets(STDIN));
$stars = str_repeat("*",$n);
$inside = "*".str_repeat(" ",$n-2)."*";

echo $stars;
echo "\n";
for ($i = 0; $i < $n-2;$i++){
    echo $inside;
    echo "\n";
}
echo $stars;
echo "\n";




