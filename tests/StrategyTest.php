<?php

/**
 * @file
 * Strategy tests.
 */

namespace Patterns\Tests;

use PHPUnit\Framework\TestCase;
use Patterns\Strategy\Duck;
use Patterns\Strategy\Behavior\QuackQuack;
use Patterns\Strategy\Behavior\QuackSqueak;


/**
 * Class StrategyTest.
 *
 * @package Patterns\Tests
 */
class StrategyTest extends TestCase {

  public function testDuckBehavior() {
    $duck = new Duck(new QuackQuack());
    $this->assertEquals('Quack-quack!', $duck->performQuack());
    $duck->setQuackBehavior(new QuackSqueak());
    $this->assertEquals('Squeak-squeak!', $duck->performQuack());
  }

}
