<?php

/**
 * @file
 * NOStylePizzaStore.php.
 */

namespace Patterns\FactoryMethod\PizzaStores;

use Patterns\FactoryMethod\Pizzas\NOCheesePizza;
use Patterns\FactoryMethod\Pizzas\NOPepperoniPizza;

/**
 * Class NOStylePizzaStore
 * @package Patterns\FactoryMethod\PizzaStores
 */
class NOStylePizzaStore extends BasePizzaStore {

  /**
   * @param $type
   * @return \Patterns\FactoryMethod\Pizzas\NOCheesePizza|\Patterns\FactoryMethod\Pizzas\NOPepperoniPizza
   */
  public function createPizza($type) {
    switch ($type) {
      case 'cheese':
        return new NOCheesePizza();

      case 'pepperoni':
        return new NOPepperoniPizza();
    }
  }

}
