<?php

/**
 * @file
 * ReggianoCheese.php.
 */

namespace Patterns\AbstractFactory\PizzaIngredients;

/**
 * Class ReggianoCheese.
 *
 * @package Patterns\AbstractFactory\PizzaIngredients
 */
class ReggianoCheese extends Cheese {

  /**
   * ReggianoCheese constructor.
   */
  public function __construct() {
    parent::__construct();
    $this->name .= ' Reggiano';
  }

}
