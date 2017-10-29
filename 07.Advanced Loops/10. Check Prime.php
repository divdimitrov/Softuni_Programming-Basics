<?php

$num = trim( fgets( STDIN ) );

echo check( $num );

function check($num)
{
    if ($num <= 1) {
        return 'Not prime';
    }
    for ($i = 2; $i < $num; $i++) {
        if ($num % $i == 0) {
            return 'Not prime';

        }
    }
    return 'Prime';
}