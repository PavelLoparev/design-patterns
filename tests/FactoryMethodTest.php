<?php

/**
 * @file
 * FactoryMethodTest.php.
 */

namespace Patterns\Tests;

use PHPUnit\Framework\TestCase;
use Patterns\FactoryMethod\PizzaStores\NOStylePizzaStore;
use Patterns\FactoryMethod\PizzaStores\NYStylePizzaStore;

/**
 * Class FactoryTest.
 *
 * @package Patterns\Tests
 */
class FactoryMethodTest extends TestCase {

  /**
   * Check factory method.
   */
  public function testFactoryMethod() {
    $nyStyleStore = new NYStylePizzaStore();
    $this->assertEquals('New York style CheesePizza', $nyStyleStore->orderPizza('cheese')->getType());
    $this->assertEquals('New York style PepperoniPizza', $nyStyleStore->orderPizza('pepperoni')->getType());

    $noStyleStore = new NOStylePizzaStore();
    $this->assertEquals('New Orleans style CheesePizza', $noStyleStore->orderPizza('cheese')->getType());
    $this->assertEquals('New Orleans style PepperoniPizza', $noStyleStore->orderPizza('pepperoni')->getType());
  }

}
