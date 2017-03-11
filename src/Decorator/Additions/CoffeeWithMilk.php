<?php

/**
 * @file
 * CoffeeWithMilk.php.
 */

namespace Patterns\Decorator\Additions;

use Patterns\Decorator\CoffeeInterface;

/**
 * Class CoffeeWithMilk.
 *
 * @package Patterns\Decorator\Additions
 */
class CoffeeWithMilk implements CoffeeInterface {

  /**
   * @var \Patterns\Decorator\CoffeeInterface
   */
  private $coffee;

  /**
   * @param \Patterns\Decorator\CoffeeInterface $coffee
   */
  public function __construct(CoffeeInterface $coffee) {
    $this->coffee = $coffee;
  }

  /**
   * @return float
   */
  public function cost() {
    return 0.5 + $this->coffee->cost();
  }

}
