<?php


$input = trim(fgets(STDIN));

$numAsText = new NumberFormatter('en',NumberFormatter::SPELLOUT);

echo $numAsText->format($input);