<?php

$x1 = trim( fgets( STDIN ) );
$y1 = trim( fgets( STDIN ) );
$x2 = trim( fgets( STDIN ) );
$y2 = trim( fgets( STDIN ) );
$x = trim( fgets( STDIN ) );
$y = trim( fgets( STDIN ) );

if ($x >= $x1 && $x <= $x2 && $y >= $y1 && $y <= $y2) {
    echo "inside";
} else {
    echo "outside";
}