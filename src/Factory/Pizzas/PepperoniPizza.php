<?php

/**
 * @file
 * PepperoniPizza.php.
 */

namespace Patterns\Factory\Pizzas;

/**
 * Class PepperoniPizza.
 *
 * @package Patterns\Factory\Pizzas
 */
class PepperoniPizza extends BasePizza {

  /**
   * PepperoniPizza constructor.
   */
  public function __construct() {
    $this->type = 'PepperoniPizza';
  }

}
