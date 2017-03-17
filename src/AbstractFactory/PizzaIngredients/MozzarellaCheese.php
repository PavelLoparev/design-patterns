<?php

/**
 * @file
 * MozzarellaCheese.php.
 */

namespace Patterns\AbstractFactory\PizzaIngredients;

/**
 * Class MozzarellaCheese.
 *
 * @package Patterns\AbstractFactory\PizzaIngredients
 */
class MozzarellaCheese extends Cheese {

  /**
   * MozzarellaCheese constructor.
   */
  public function __construct() {
    parent::__construct();
    $this->name .= ' Mozzarella';
  }

}
