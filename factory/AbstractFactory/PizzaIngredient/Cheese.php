<?php

class Cheese {
  protected $name;

  public function __construct() {
    $this->name = 'Cheese';
  }

  public function getName() {
    return $this->name;
  }
}
