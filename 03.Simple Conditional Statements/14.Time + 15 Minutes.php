<?php

$hours = trim(fgets(STDIN));
$minutes = trim(fgets(STDIN));

$sum = (($hours * 60) + $minutes + 15);
$resulthour = $sum / 60;
if ($resulthour >= 24)
{
    $resulthour -= 24;
}
$resultmin = $sum % 60;

$resulthour = (int)($resulthour);
$resultmin = sprintf('%02d',$resultmin);

echo "$resulthour:$resultmin";
