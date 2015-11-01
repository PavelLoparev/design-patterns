<?php

class MozzarellaCheese extends Cheese {
  public function __construct() {
    parent::__construct();
    $this->name .= ' Mozzarella';
  }
}
