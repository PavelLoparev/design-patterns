<?php

class ReggianoCheese extends Cheese {
  public function __construct() {
    parent::__construct();
    $this->name .= ' Reggiano';
  }
}
