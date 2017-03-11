<?php

/**
 * @file
 * Strategy tests.
 */

namespace Patterns\Tests;

use PHPUnit\Framework\TestCase;
use Patterns\Strategy\Duck;
use Patterns\Strategy\Behaviors\QuackQuack;
use Patterns\Strategy\Behaviors\QuackSqueak;


/**
 * Class StrategyTest.
 *
 * @package Patterns\Tests
 */
class StrategyTest extends TestCase {

  /**
   * Test different quack strategies.
   */
  public function testDuckBehavior() {
    $duck = new Duck(new QuackQuack());
    $this->assertEquals('Quack-quack!', $duck->performQuack());
    $duck->setQuackBehavior(new QuackSqueak());
    $this->assertEquals('Squeak-squeak!', $duck->performQuack());
  }

}
