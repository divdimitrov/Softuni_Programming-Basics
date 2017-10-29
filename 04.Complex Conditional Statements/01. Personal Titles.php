<?php

declare(strict_types=1);


$age = (int)trim( fgets( STDIN ) );
$sex = trim( fgets( STDIN ) );

switch ($sex) {
    case "m":
        if ($age < 16) {
            echo "Master";
        } else {
            echo "Mr.";
        }
        break;
    case "f":
        if ($age < 16) {
            echo "Miss";
        } else {
            echo "Ms.";
        }
        break;
}