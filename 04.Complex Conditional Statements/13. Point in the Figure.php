<?php

$h = (int)trim( fgets( STDIN ) );
$x = (int)trim( fgets( STDIN ) );
$y = (int)trim( fgets( STDIN ) );

if (($x >= 0 && $x <= $h * 3 && $y >= 0 && $y <= $h) || ($x >= $h && $x <= $h * 2 && $y >= $h && $y <= $h * 4)) {
    if (($x > 0 && $x < $h * 3 && $y > 0 && $y < $h) || ($x > $h && $x < $h * 2 && $y > $h && $y < $h * 4))
        echo "inside";
    else {
        if ($x > $h && $x < $h * 2 && $y == $h)
            echo "inside";
        else
            echo "border";
    }
} else
    echo "outside";
