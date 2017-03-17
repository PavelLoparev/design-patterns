<?php

/**
 * @file
 * NOPepperoniPizza.php.
 */

namespace Patterns\FactoryMethod\Pizzas;

/**
 * Class NOPepperoniPizza.
 *
 * @package Patterns\FactoryMethod\Pizzas
 */
class NOPepperoniPizza extends PepperoniPizza {

  /**
   * NOPepperoniPizza constructor.
   */
  public function __construct() {
    parent::__construct();

    $this->type = 'New Orleans style ' . $this->getType();
  }

}
