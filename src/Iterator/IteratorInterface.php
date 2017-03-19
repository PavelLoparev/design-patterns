<?php

/**
 * @file
 * IteratorInterface.php.
 */

namespace Patterns\Iterator;

/**
 * Interface IteratorInterface.
 *
 * It's an example interface. In real life it's
 * better to use php built in Iterator interface.
 * @see http://php.net/manual/en/class.iterator.php
 *
 * @package Patterns\Iterator
 */
interface IteratorInterface {

  /**
   * @return mixed
   */
  public function next();

  /**
   * @return mixed
   */
  public function hasNext();

}
