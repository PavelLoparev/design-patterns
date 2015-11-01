<?php

class PhpArrayIterator implements IteratorInterface {
  private $position = 0;
  private $array;

  public function __construct(array $array) {
    $this->array = array_values($array);
  }

  public function next() {
    return $this->array[$this->position++];
  }

  public function hasNext() {
    return isset($this->array[$this->position]);
  }
}
