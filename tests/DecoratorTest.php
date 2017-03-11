<?php

/**
 * @file
 * DecoratorTest.php.
 */

namespace Patterns\Tests;

use PHPUnit\Framework\TestCase;
use Patterns\Decorator\Coffee;
use Patterns\Decorator\Additions\CoffeeWithMilk;
use Patterns\Decorator\Additions\CoffeeWithSugar;

/**
 * Class DecoratorTest.
 *
 * @package Patterns\Tests
 */
class DecoratorTest extends TestCase {

  /**
   * Check base coffee cost.
   */
  public function testCoffeeCost() {
    $coffee = new Coffee();
    $this->assertEquals(1.99, $coffee->cost());
  }

  /**
   * Check coffee with milk cost.
   */
  public function testCoffeeWithMilkCost() {
    $coffeeWithMilk = new CoffeeWithMilk(new Coffee());
    $this->assertEquals(2.49, $coffeeWithMilk->cost());
  }

  /**
   * Check coffee with sugar cost.
   */
  public function testCoffeeWithSugarCost() {
    $coffeeWithSugar = new CoffeeWithSugar(new Coffee());
    $this->assertEquals(2.29, $coffeeWithSugar->cost());
  }

  /**
   * Check coffee with milk and sugar cost.
   */
  public function testCoffeeWithMilkAndSugarCost() {
    $coffeeWithMilkAndSugar = new CoffeeWithMilk(new CoffeeWithSugar(new Coffee()));
    $this->assertEquals(2.79, $coffeeWithMilkAndSugar->cost());
  }

}
