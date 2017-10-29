<?php

$type = trim( fgets( STDIN ) );
$rows = (int)trim( fgets( STDIN ) );
$cols = (int)trim( fgets( STDIN ) );

if ($type == "Premiere")
    echo number_format( (($rows * $cols) * 12), 2, '.', '' ) . " leva";
else if ($type == "Normal")
    echo number_format( (($rows * $cols) * 7.5), 2, '.', '' ) . " leva";
else if ($type == "Discount")
    echo number_format( (($rows * $cols) * 5), 2, '.', '' ) . " leva";