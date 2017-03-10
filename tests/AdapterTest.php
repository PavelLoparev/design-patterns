<?php

/**
 * @file
 * AdapterTest.php.
 */

namespace Patterns\Tests;

use Patterns\Adapter\Duck;
use Patterns\Adapter\Turkey;
use Patterns\Adapter\TurkeyToDuckAdapter;
use PHPUnit\Framework\TestCase;

/**
 * Class AdapterTest.
 *
 * @package Patterns\Tests
 */
class AdapterTest extends TestCase {

  /**
   * Check if duck behaves like a duck.
   */
  public function testDuckBehavior() {
    $duck = new Duck();
    $this->assertEquals('Duck is quacking!', $duck->quack());
    $this->assertEquals('Duck is flying!', $duck->fly());
  }

  /**
   * Check if turkey behaves like a turkey.
   */
  public function testTurkeyBehavior() {
    $turkey = new Turkey();
    $this->assertEquals('Turkey is gobbling!', $turkey->gobble());
    $this->assertEquals('Turkey is flying short distance!', $turkey->fly());
  }

  /**
   * Check if turkey behaves like a duck.
   */
  public function testTurkeyToDuckAdapterBehavior() {
    $adapter = new TurkeyToDuckAdapter(new Turkey());
    $this->assertEquals('Turkey is gobbling!', $adapter->quack());
    $this->assertEquals('Turkey is flying short distance!', $adapter->fly());
  }

}
