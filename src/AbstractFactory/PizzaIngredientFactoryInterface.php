<?php

/**
 * @file
 * PizzaIngredientFactoryInterface.php.
 */

namespace Patterns\AbstractFactory;

/**
 * Interface PizzaIngredientFactoryInterface.
 *
 * @package Patterns\AbstractFactory
 */
interface PizzaIngredientFactoryInterface {

  /**
   * @return mixed
   */
  public function createCheese();

}
