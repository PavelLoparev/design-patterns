<?php

/**
 * @file
 * PepperoniPizza.php.
 */

namespace Patterns\FactoryMethod\Pizzas;

/**
 * Class PepperoniPizza.
 *
 * @package Patterns\FactoryMethod\Pizzas
 */
class PepperoniPizza extends BasePizza {

  /**
   * PepperoniPizza constructor.
   */
  public function __construct() {
    $this->type = 'PepperoniPizza';
  }

}
