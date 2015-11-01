<?php

require_once('BaseDecorator.php');

class Chocolate extends BaseDecorator {
  public function getDescription() {
    return $this->baseCoffee->getDescription() . ', Chocolate';
  }

  public function cost() {
    return 0.5 + $this->baseCoffee->cost();
  }
}
