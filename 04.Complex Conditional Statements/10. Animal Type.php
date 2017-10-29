<?php

$input = trim( fgets( STDIN ) );

switch ($input) {
    case "dog":
        echo "mammal";
        break;
    case "crocodile":
    case "tortoise":
    case "snake":
        echo "reptile";
        break;
    default:
        echo "unknown";
        break;
}