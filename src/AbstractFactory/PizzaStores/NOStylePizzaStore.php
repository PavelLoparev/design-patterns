<?php

/**
 * @file
 * NOStylePizzaStore.php.
 */

namespace Patterns\AbstractFactory\PizzaStores;

use Patterns\AbstractFactory\Factories\NOPizzaIngredientFactory;
use Patterns\AbstractFactory\Pizzas\CheesePizza;

/**
 * Class NOStylePizzaStore.
 *
 * @package Patterns\AbstractFactory\PizzaStores
 */
class NOStylePizzaStore extends BasePizzaStore {

  /**
   * @param $type
   * @return \Patterns\AbstractFactory\Pizzas\CheesePizza
   */
  public function createPizza($type) {
    switch ($type) {
      case 'cheese':
        return new CheesePizza(new NOPizzaIngredientFactory());

      // Here can be other pizzas.
    }
  }

}
