<?php

class NOStylePizzaStore extends BasePizzaStore {
  public function createPizza($type) {
    switch ($type) {
      case 'cheese':
        return new NOCheesePizza();

      case 'pepperoni':
        return new NOPepperoniPizza();
    }
  }
}
