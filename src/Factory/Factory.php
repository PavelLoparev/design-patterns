<?php

/**
 * @file
 * Factory.php.
 */

namespace Patterns\Factory;

use Patterns\Factory\Pizzas\CheesePizza;
use Patterns\Factory\Pizzas\PepperoniPizza;

/**
 * Class Factory.
 *
 * @package Patterns\Factory
 */
class Factory {

  /**
   * @param $type
   * @return \Patterns\Factory\Pizzas\CheesePizza|\Patterns\Factory\Pizzas\PepperoniPizza
   */
  static public function createPizza($type) {
    switch ($type) {
      case 'cheese':
        return new CheesePizza();

      case 'pepperoni':
        return new PepperoniPizza();
    }
  }

}
