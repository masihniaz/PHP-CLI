<?php

class StringUtility
{

  public static function toUpperCase($string)
  {
    return strtoupper($string);
  }

  public static function toAlternateUpperCase($string)
  {
    $letters = str_split($string);
    $alternateCase = "";
    for ($i = 0; $i < count($letters); $i++) {
      if ($i % 2 == 1) {
        $alternateCase .= strtoupper($letters[$i]);
      } else {
        $alternateCase .= $letters[$i];
      }
    }
    return $alternateCase;
  }

  public static function convertToCsv($string)
  {
    $letters = str_split($string);
    return join(",", $letters);
  }

  public static function writeCsvToDisk($csv)
  {
    $csvFile = fopen("file.csv", "w") or die("Unable to open file!");
    try {
      fwrite($csvFile, $csv);
      fclose($csvFile);
      echo "CSV Created!".PHP_EOL;
    } catch (Exceptioin $ex) {
      echo $ex;
    }
  }
}