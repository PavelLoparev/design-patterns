<?php

class NYPizzaIngredientFactory implements PizzaIngredientFactoryInterface {
  protected $cheese;

  public function createCheese() {
    return new ReggianoCheese();
  }
}
