<?php

/**
 * @file
 * NYCheesePizza.php.
 */

namespace Patterns\FactoryMethod\Pizzas;

/**
 * Class NYCheesePizza.
 *
 * @package Patterns\FactoryMethod\Pizzas
 */
class NYCheesePizza extends CheesePizza {

  /**
   * NYCheesePizza constructor.
   */
  public function __construct() {
    parent::__construct();

    $this->type = 'New York style ' . $this->getType();
  }

}
