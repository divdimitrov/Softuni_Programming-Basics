<?php

$input = trim(fgets(STDIN));

echo date('d-m-Y', strtotime($input. ' + 999 days'));







