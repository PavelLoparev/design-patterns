<?php

class NYStylePizzaStore extends BasePizzaStore {
  public function createPizza($type) {
    switch ($type) {
      case 'cheese':
        return new CheesePizza(new NYPizzaIngredientFactory());
    }
  }
}
