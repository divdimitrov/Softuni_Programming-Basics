<?php

$text = trim( fgets( STDIN ) );
$sum = 0;

for ($i = 0; $i <= strlen( $text ) - 1; $i++) {
    switch ($text[$i]) {
        case 'a':
            $sum += 1;
            break;
        case 'e':
            $sum += 2;
            break;
        case 'i':
            $sum += 3;
            break;
        case 'o':
            $sum += 4;
            break;
        case 'u':
            $sum += 5;
            break;
    }
}
echo $sum;