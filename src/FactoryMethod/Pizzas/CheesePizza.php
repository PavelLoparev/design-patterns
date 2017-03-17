<?php

/**
 * @file
 * CheesePizza.php.
 */

namespace Patterns\FactoryMethod\Pizzas;

/**
 * Class CheesePizza.
 *
 * @package Patterns\FactoryMethod\Pizzas
 */
class CheesePizza extends BasePizza {

  /**
   * CheesePizza constructor.
   */
  public function __construct() {
    $this->type = 'CheesePizza';
  }

}
