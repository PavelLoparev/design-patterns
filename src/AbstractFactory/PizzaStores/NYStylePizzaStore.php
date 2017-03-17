<?php

/**
 * @file
 * NYStylePizzaStore.php.
 */

namespace Patterns\AbstractFactory\PizzaStores;

use Patterns\AbstractFactory\Factories\NYPizzaIngredientFactory;
use Patterns\AbstractFactory\Pizzas\CheesePizza;

/**
 * Class NYStylePizzaStore.
 *
 * @package Patterns\AbstractFactory\PizzaStores
 */
class NYStylePizzaStore extends BasePizzaStore {

  /**
   * @param $type
   * @return \Patterns\AbstractFactory\Pizzas\CheesePizza
   */
  public function createPizza($type) {
    switch ($type) {
      case 'cheese':
        return new CheesePizza(new NYPizzaIngredientFactory());

      // Here can be other pizzas.
    }
  }

}
