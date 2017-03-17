<?php

/**
 * @file
 * NYStylePizzaStore.php.
 */

namespace Patterns\FactoryMethod\PizzaStores;

use Patterns\FactoryMethod\Pizzas\NYCheesePizza;
use Patterns\FactoryMethod\Pizzas\NYPepperoniPizza;

/**
 * Class NYStylePizzaStore.
 *
 * @package Patterns\FactoryMethod\PizzaStores
 */
class NYStylePizzaStore extends BasePizzaStore {

  /**
   * @param $type
   * @return \Patterns\FactoryMethod\Pizzas\NYCheesePizza|\Patterns\FactoryMethod\Pizzas\NYPepperoniPizza
   */
  public function createPizza($type) {
    switch ($type) {
      case 'cheese':
        return new NYCheesePizza();

      case 'pepperoni':
        return new NYPepperoniPizza();
    }
  }

}
