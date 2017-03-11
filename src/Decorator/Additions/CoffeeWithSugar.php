<?php

/**
 * @file
 * CoffeeWithSugar.php.
 */

namespace Patterns\Decorator\Additions;

use Patterns\Decorator\CoffeeInterface;

/**
 * Class CoffeeWithSugar.
 *
 * @package Patterns\Decorator\Additions
 */
class CoffeeWithSugar implements CoffeeInterface {

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
    return 0.3 + $this->coffee->cost();
  }

}
