<?php

/**
 * @file
 * BasePizza.php.
 */

namespace Patterns\AbstractFactory\Pizzas;

use Patterns\AbstractFactory\IngredientInterface;

/**
 * Class BasePizza.
 *
 * @package Patterns\AbstractFactory\Pizzas
 */
abstract class BasePizza {

  /**
   * @var IngredientInterface
   */
  protected $ingredient;

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
