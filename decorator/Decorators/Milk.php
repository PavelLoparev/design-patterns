<?php

require_once('BaseDecorator.php');

class Milk extends BaseDecorator {
  public function getDescription() {
    return $this->baseCoffee->getDescription() . ', Milk';
  }

  public function cost() {
    return 0.3 + $this->baseCoffee->cost();
  }
}
