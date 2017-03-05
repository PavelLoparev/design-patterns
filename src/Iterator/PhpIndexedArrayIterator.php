<?php

namespace Patterns\Iterator;

/**
 * Class PhpIndexedArrayIterator.
 *
 * @package Patterns\Iterator
 */
class PhpIndexedArrayIterator implements IteratorInterface {

  /**
   * Iterator position.
   *
   * @var int
   */
  private $position = 0;

  /**
   * Array to iterate through.
   *
   * @var array
   */
  private $array = [];

  /**
   * PhpArrayIterator constructor.
   *
   * @param array $array
   */
  public function __construct(array $array) {
    $this->array = array_values($array);
  }

  public function current() {
    return isset($this->array[$this->position]) ? $this->array[$this->position] : null;
  }

  /**
   * Returns next array element or false.
   *
   * @return mixed
   */
  public function next() {
    return isset($this->array[$this->position + 1]) ? $this->array[++$this->position] : null;
  }

  /**
   * Checks if next element exists.
   *
   * @return bool
   */
  public function hasNext() {
    return isset($this->array[$this->position]);
  }

}
