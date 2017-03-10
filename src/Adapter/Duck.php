<?php

/**
 * @file
 * Duck.php.
 */

namespace Patterns\Adapter;

/**
 * Class Duck.
 *
 * @package Patterns\Adapter
 */
class Duck implements DuckInterface {

  /**
   * @return string
   */
  public function quack() {
    return 'Duck is quacking!';
  }

  /**
   * @return string
   */
  public function fly() {
    return 'Duck is flying!';
  }

}
