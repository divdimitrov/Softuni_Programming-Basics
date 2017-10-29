<?php

$firstWord = strtolower(trim(fgets(STDIN)));
$secondWord = strtolower(trim(fgets(STDIN)));


if ($firstWord == $secondWord){
    echo "yes";
}
else{
    echo "no";
}