<?php

class NOPizzaIngredientFactory implements PizzaIngredientFactoryInterface {
  protected $cheese;

  public function createCheese() {
    return new MozzarellaCheese();
  }
}
