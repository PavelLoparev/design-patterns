<?php

/**
 * @file
 * TurkeyToDuckAdapter.php.
 */

namespace Patterns\Adapter;

/**
 * Class TurkeyToDuckAdapter.
 *
 * @package Patterns\Adapter
 */
class TurkeyToDuckAdapter implements DuckInterface {

  /**
   * @var
   */
  private $turkey;

  /**
   * @param $turkey
   */
  public function __construct($turkey) {
    $this->turkey = $turkey;
  }

  /**
   * @return mixed
   */
  public function quack() {
    return $this->turkey->gobble();
  }

  /**
   * @return mixed
   */
  public function fly() {
    return $this->turkey->fly();
  }

}
