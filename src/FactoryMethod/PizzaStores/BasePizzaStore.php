<?php

/**
 * @file
 * BasePizzaStore.php.
 */

namespace Patterns\FactoryMethod\PizzaStores;

/**
 * Class BasePizzaStore.
 *
 * @package Patterns\FactoryMethod\Pizzas
 */
abstract class BasePizzaStore {

  /**
   * @param $type
   * @return mixed
   */
  abstract public function createPizza($type);

  /**
   * @param $type
   * @return mixed
   */
  public function orderPizza($type) {
    return $this->createPizza($type);
  }

}
