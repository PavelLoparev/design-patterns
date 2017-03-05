<?php

namespace Patterns\Iterator;

/**
 * Interface IteratorInterface.
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

  /**
   * @return mixed
   */
  public function current();

}
