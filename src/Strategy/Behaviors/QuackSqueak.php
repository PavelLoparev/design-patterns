<?php

/**
 * @file
 * QuackSqueak.php.
 */

namespace Patterns\Strategy\Behaviors;

use Patterns\Strategy\QuackInterface;

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
