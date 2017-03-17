<?php

/**
 * @file
 * NOPizzaIngredientFactory.php.
 */

namespace Patterns\AbstractFactory\Factories;

use Patterns\AbstractFactory\PizzaIngredientFactoryInterface;
use Patterns\AbstractFactory\PizzaIngredients\MozzarellaCheese;

/**
 * Class NOPizzaIngredientFactory.
 *
 * @package Patterns\AbstractFactory\Factories
 */
class NOPizzaIngredientFactory implements PizzaIngredientFactoryInterface {

  /**
   * @var
   */
  protected $cheese;

  /**
   * @return \Patterns\AbstractFactory\PizzaIngredients\MozzarellaCheese
   */
  public function createCheese() {
    return new MozzarellaCheese();
  }

}
