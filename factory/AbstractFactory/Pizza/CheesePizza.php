<?php

class CheesePizza extends BasePizza {
  protected $ingredientFactory;

  public function __construct($ingredientFactory) {
    $this->ingredientFactory = $ingredientFactory;
  }

  public function prepare() {
    $this->cheese = $this->ingredientFactory->createCheese();
    echo 'Prepare cheese pizza with ' . $this->cheese->getName() . ' cheese' . PHP_EOL;
  }
}
