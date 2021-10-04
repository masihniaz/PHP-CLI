<?php

use PHPUnit\Framework\TestCase;

include "src/StringUtility.php";

class StringUtilityTest extends TestCase
{
  protected $string;

  protected function setUp(): void {
    $this->string = "hello world";
  }

  public function testToUpperCase()
  {
    $expected = "HELLO WORLD";
    $converted = StringUtility::toUpperCase($this->string);
    $this->assertSame($expected, $converted);
  }

  public function testToAlternateUpperCase()
  {
    $expected = "hElLo wOrLd";
    $converted = StringUtility::toAlternateUpperCase($this->string);
    $this->assertSame($expected, $converted);
  }

  public function testConvertToCsv()
  {
    $expected = "h,e,l,l,o, ,w,o,r,l,d";
    $csv = StringUtility::convertToCsv($this->string);
    $this->assertSame($expected, $csv);
  }

  public function testWriteCsvToDisk() {
    $csv = "h,e,l,l,o, ,w,o,r,l,d";
    StringUtility::writeCsvToDisk($csv);
    $csvFileContent = file_get_contents('file.csv');
    $this->assertSame($csv, $csvFileContent);
  }

}