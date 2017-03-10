<?php

/**
 * @file
 * DuckInterface.php.
 */

namespace Patterns\Adapter;

/**
 * Interface DuckInterface.
 *
 * @package Patterns\Adapter
 */
interface DuckInterface {

  /**
   * @return mixed
   */
  public function quack();

  /**
   * @return mixed
   */
  public function fly();

}
