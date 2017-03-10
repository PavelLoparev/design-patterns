<?php

/**
 * @file
 * QuackSqueak.php.
 */

namespace Patterns\Strategy\Behavior;

/**
 * Class QuackSqueak.
 *
 * @package Patterns\Strategy\Behavior
 */
class QuackSqueak implements QuackInterface {

  /**
   * @return string
   */
  public function quack() {
    return 'Squeak-squeak!';
  }

}
