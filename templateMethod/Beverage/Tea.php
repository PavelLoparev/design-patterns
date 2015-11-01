<?php

class Tea extends BaseBeverage {
  public function brew() {
    echo 'Putting tea package into water...' . PHP_EOL;
  }

  public function addCondiments() {
    echo 'Adding lemon...' . PHP_EOL;
  }
}
