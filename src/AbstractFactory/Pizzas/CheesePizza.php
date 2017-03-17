<?php

/**
 * @file
 * CheesePizza.php.
 */

namespace Patterns\AbstractFactory\Pizzas;

use Patterns\AbstractFactory\PizzaIngredientFactoryInterface;

/**
 * Class CheesePizza.
 *
 * @package Patterns\AbstractFactory\Pizzas
 */
class CheesePizza extends BasePizza {

  /**
   * @var PizzaIngredientFactoryInterface
   */
  protected $ingredientFactory;

  /**
   * CheesePizza constructor.
   * @param $ingredientFactory
   */
  public function __construct(PizzaIngredientFactoryInterface $ingredientFactory) {
    $this->ingredientFactory = $ingredientFactory;
    $this->ingredient = $this->ingredientFactory->createCheese();
    $this->type = 'Cheese pizza with "' . $this->ingredient->getName() . '" ingredient.';
  }

}
