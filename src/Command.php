#!/usr/bin/php
<?php

include "StringUtility.php";

$string = $argv[1];
echo StringUtility::toUpperCase($string).PHP_EOL;
echo StringUtility::toAlternateUpperCase($string).PHP_EOL;
$csv = StringUtility::convertToCsv($string);
StringUtility::writeCsvToDisk($csv);

die();
