<?php

abstract class BasePizzaStore {
  abstract public function createPizza($type);

  public function orderPizza($type) {
    $pizza = $this->createPizza($type);
    $pizza->prepare();
    $pizza->bake();
    $pizza->cut();
    $pizza->box();
  }
}
