<?php

/**
 * @file
 * PhpIndexedArrayIterator.php.
 */

namespace Patterns\Iterator;

/**
 * Class PhpIndexedArrayIterator.
 *
 * @package Patterns\Iterator
 */
class PhpIndexedArrayIterator implements IteratorInterface {

  /**
   * @var int
   */
  private $position = -1;

  /**
   * @var array
   */
  private $array = [];

  /**
   * @param array $array
   */
  public function __construct(array $array) {
    $this->array = array_values($array);
  }

  /**
   * @return mixed
   */
  public function next() {
    return $this->hasNext() ? $this->array[++$this->position] : null;
  }

  /**
   * @return bool
   */
  public function hasNext() {
    return isset($this->array[$this->position + 1]);
  }

}
