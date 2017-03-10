<?php

/**
 * @file
 * QuackQuack.php.
 */

namespace Patterns\Strategy\Behavior;

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
