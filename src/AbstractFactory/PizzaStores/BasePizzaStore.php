<?php

/**
 * @file
 * BasePizzaStore.php.
 */

namespace Patterns\AbstractFactory\PizzaStores;

/**
 * Class BasePizzaStore.
 *
 * @package Patterns\AbstractFactory\PizzaStores
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
