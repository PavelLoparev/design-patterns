<?php

/**
 * @file
 * NYPizzaIngredientFactory.php.
 */

namespace Patterns\AbstractFactory\Factories;

use Patterns\AbstractFactory\PizzaIngredientFactoryInterface;
use Patterns\AbstractFactory\PizzaIngredients\ReggianoCheese;

/**
 * Class NYPizzaIngredientFactory.
 *
 * @package Patterns\AbstractFactory\Factories
 */
class NYPizzaIngredientFactory implements PizzaIngredientFactoryInterface {

  /**
   * @var
   */
  protected $cheese;

  /**
   * @return \Patterns\AbstractFactory\PizzaIngredients\ReggianoCheese
   */
  public function createCheese() {
    return new ReggianoCheese();
  }

}
