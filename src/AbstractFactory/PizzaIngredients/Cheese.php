<?php

/**
 * @file
 * Cheese.php.
 */

namespace Patterns\AbstractFactory\PizzaIngredients;

use Patterns\AbstractFactory\IngredientInterface;

/**
 * Class Cheese.
 *
 * @package Patterns\AbstractFactory\PizzaIngredients
 */
class Cheese implements IngredientInterface {

  /**
   * @var string
   */
  protected $name;

  /**
   * Cheese constructor.
   */
  public function __construct() {
    $this->name = 'Cheese';
  }

  /**
   * @return string
   */
  public function getName() {
    return $this->name;
  }

}
