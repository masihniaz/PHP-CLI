<?php

use PHPUnit\Framework\TestCase;

include "src/StringUtility.php";

class StringUtilityTest extends TestCase
{

  public function testToUpperCase()
  {
    $string = "hello world";
    $expected = "HELLO WORLD";
    $converted = StringUtility::toUpperCase($string);
    $this->assertSame($expected, $converted);
  }

  public function testToAlternateUpperCase()
  {
    $string = "hello world";
    $expected = "hElLo wOrLd";
    $converted = StringUtility::toAlternateUpperCase($string);
    $this->assertSame($expected, $converted);
  }

  public function testConvertToCsv()
  {
    $string = "hello world";
    $expected = "h,e,l,l,o, ,w,o,r,l,d";
    $csv = StringUtility::convertToCsv($string);
    $this->assertSame($expected, $csv);
  }

  public function testWriteCsvToDisk() {
    $csv = "h,e,l,l,o, ,w,o,r,l,d";
    StringUtility::writeCsvToDisk($csv);
    $csvFileContent = file_get_contents('file.csv');
    $this->assertSame($csv, $csvFileContent);
  }

}