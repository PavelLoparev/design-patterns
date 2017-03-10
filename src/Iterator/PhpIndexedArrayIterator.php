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
  private $position = 0;

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
  public function current() {
    return isset($this->array[$this->position]) ? $this->array[$this->position] : null;
  }

  /**
   * @return mixed
   */
  public function next() {
    return isset($this->array[$this->position + 1]) ? $this->array[++$this->position] : null;
  }

  /**
   * @return bool
   */
  public function hasNext() {
    return isset($this->array[$this->position]);
  }

}
