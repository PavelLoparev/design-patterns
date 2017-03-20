<?php

/**
 * @file
 * PhpIndexedArrayIterator.php.
 */

namespace Patterns\Iterator;

use Iterator;

/**
 * Class PhpIndexedArrayIterator.
 *
 * @package Patterns\Iterator
 */
class PhpIndexedArrayIterator implements Iterator {

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
   * @inheritdoc
   */
  public function rewind() {
    $this->position = 0;
  }

  /**
   * @inheritdoc
   */
  public function current() {
    return $this->valid() ? $this->array[$this->position] : NULL;
  }

  /**
   * @inheritdoc
   */
  public function key() {
    return $this->position;
  }

  /**
   * @inheritdoc
   */
  public function next() {
    ++$this->position;
  }

  /**
   * @inheritdoc
   */
  public function valid() {
    return isset($this->array[$this->position]);
  }

}
