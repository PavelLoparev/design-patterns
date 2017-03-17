<?php

/**
 * @file
 * AbstractFactoryTest.php.
 */

namespace Patterns\Tests;

use PHPUnit\Framework\TestCase;
use Patterns\AbstractFactory\PizzaStores\NOStylePizzaStore;
use Patterns\AbstractFactory\PizzaStores\NYStylePizzaStore;

/**
 * Class AbstractFactoryTest.
 *
 * @package Patterns\Tests
 */
class AbstractFactoryTest extends TestCase {

  /**
   * Check abstract factory.
   */
  public function testAbstractFactory() {
    $nyStyleStore = new NYStylePizzaStore();
    $this->assertEquals('Cheese pizza with "Cheese Reggiano" ingredient.', $nyStyleStore->orderPizza('cheese')->getType());

    $noStyleStore = new NOStylePizzaStore();
    $this->assertEquals('Cheese pizza with "Cheese Mozzarella" ingredient.', $noStyleStore->orderPizza('cheese')->getType());
  }

}
