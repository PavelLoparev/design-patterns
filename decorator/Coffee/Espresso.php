<?php

require_once('BaseCoffee.php');

class Espresso extends BaseCoffee {
  public function Espresso() {
    $this->description = 'Espresso';
  }

  public function cost() {
    return 1.99;
  }
}
