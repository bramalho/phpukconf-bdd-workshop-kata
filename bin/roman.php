#!/usr/bin/env php
<?php
include "vendor/autoload.php";

echo "Enter a number: ";
$input = trim(fgets(STDIN));

echo $input . " = " . (new RomanNumber())->convert((int)$input) . "\n";
