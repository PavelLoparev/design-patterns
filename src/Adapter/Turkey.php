<?php

/**
 * @file
 * Turkey.php.
 */

namespace Patterns\Adapter;

/**
 * Class Turkey.
 *
 * @package Patterns\Adapter
 */
class Turkey {

  /**
   * @return string
   */
  public function gobble() {
    return 'Turkey is gobbling!';
  }

  /**
   * @return string
   */
  public function fly() {
    return 'Turkey is flying short distance!';
  }

}
