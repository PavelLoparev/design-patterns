<?php

/**
 * @NYPepperoniPizza.php.
 */

namespace Patterns\FactoryMethod\Pizzas;

/**
 * Class NYPepperoniPizza.
 *
 * @package Patterns\FactoryMethod\Pizzas
 */
class NYPepperoniPizza extends PepperoniPizza {

  /**
   * NYPepperoniPizza constructor.
   */
  public function __construct() {
    parent::__construct();

    $this->type = 'New York style ' . $this->getType();
  }

}
