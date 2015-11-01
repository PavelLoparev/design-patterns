<?php

class SimpleFactory {
  static public function createPizza($type) {
    switch ($type) {
      case 'cheese':
        return new CheesePizza();

      case 'pepperoni':
        return new PepperoniPizza();
    }
  }
}
