<?php

$num = trim( fgets( STDIN ) );

echo Fib( $num );

function Fib(int $number)
{
    $firstMember = 1;
    $secondMember = 0;
    $result = 0;
    for ($i = 0; $i <= $number; $i++) {
        if ($number == 0 || $number == 1) {
            return $firstMember;
        }

        $result = $firstMember + $secondMember;
        $firstMember = $secondMember;
        $secondMember = $result;
    }
    return $result;
}