<?php

/**
 * @file
 * BasePizza.php.
 */

namespace Patterns\FactoryMethod\Pizzas;

/**
 * Class BasePizza.
 *
 * @package Patterns\FactoryMethod
 */
class BasePizza {

  /**
   * @var
   */
  protected $type;

  /**
   * @return mixed
   */
  public function getType() {
    return $this->type;
  }

}
