<?php

/**
 * @file
 * TemplateMethod tests.
 */

namespace Patterns\Tests;

use PHPUnit\Framework\TestCase;
use Patterns\TemplateMethod\Coffee;

/**
 * Class TemplateMethodTest.
 *
 * @package Patterns\Tests
 */
class TemplateMethodTest extends TestCase {

  /**
   * Check method invocation order.
   */
  public function testCoffee() {
    $coffee = new Coffee();
    $this->assertEquals('Boiling water.Making some coffee.Putting into cup.Adding sugar and milk.', $coffee->makeBeverage());
  }

}
