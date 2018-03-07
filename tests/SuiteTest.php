<?php
use PHPUnit\Framework\TestCase;
use miamioh\Behat\Classes\Suite;

class SuiteTests extends TestCase {

  /** @var  Suite */
  private $suite;


  public function testCanGetNameOfSuite(): void {
    $suiteName = 'TestSuite';
    $suite = new Suite($suiteName);
    $this->assertEquals($suiteName,$suite->getName());
  }

  public function testCanBeUsedAsString(): void {
    $this->assertEquals('Test Suite', new Suite('Test Suite'));
  }

  public function testCanBeReturnedAsArray(): void {
    $suiteName = 'TestSuite';
    $suite = new Suite($suiteName);
    $this->assertEquals(['Name'=>$suiteName],$suite->asArray());
  }


}
