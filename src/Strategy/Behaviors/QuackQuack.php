<?php

/**
 * @file
 * QuackQuack.php.
 */

namespace Patterns\Strategy\Behaviors;

use Patterns\Strategy\QuackInterface;

/**
 * Class QuackQuack.
 *
 * @package Patterns\Strategy\Behavior
 */
class QuackQuack implements QuackInterface {

  /**
   * @return string
   */
  public function quack() {
    return 'Quack-quack!';
  }

}
