<?php

/**
 * @file
 * CheesePizza.php.
 */

namespace Patterns\Factory\Pizzas;

/**
 * Class CheesePizza.
 *
 * @package Patterns\Factory\Pizzas
 */
class CheesePizza extends BasePizza {

  /**
   * CheesePizza constructor.
   */
  public function __construct() {
    $this->type = 'CheesePizza';
  }

}
