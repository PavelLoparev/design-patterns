<?php

/**
 * @file
 * Coffee.php.
 */

namespace Patterns\Decorator;

/**
 * Class Coffee.
 *
 * @package Patterns\Decorator
 */
class Coffee implements CoffeeInterface {

  /**
   * @return float
   */
  public function cost() {
    return 1.99;
  }

}
