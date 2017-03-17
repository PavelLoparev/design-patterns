<?php

/**
 * @file
 * BasePizza.php.
 */

namespace Patterns\Factory\Pizzas;

/**
 * Class BasePizza.
 *
 * @package Patterns\Factory
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
