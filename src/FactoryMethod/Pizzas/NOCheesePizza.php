<?php

/**
 * @file
 * NOCheesePizza.php.
 */

namespace Patterns\FactoryMethod\Pizzas;

/**
 * Class NOCheesePizza.
 *
 * @package Patterns\FactoryMethod\Pizzas
 */
class NOCheesePizza extends CheesePizza {

  /**
   * NOCheesePizza constructor.
   */
  public function __construct() {
    parent::__construct();

    $this->type = 'New Orleans style ' . $this->getType();
  }

}
