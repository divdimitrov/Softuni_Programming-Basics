<?php
declare(strict_types=1);

$istesting = true;
while ($istesting) {
    echo("Enter even number: ").PHP_EOL;
    $number = trim( fgets( STDIN ) );

    try {
        $numeral = (int)$number;
        if ($numeral % 2 == 0 && $numeral != 0) {
            echo ("Even number entered: " . $numeral) . PHP_EOL;
            $istesting = false;
        } else
            echo ("The number is not even.") . PHP_EOL;
    } catch (Exception $e) {
        echo ("Invalid Number!") . PHP_EOL;
    }
}

