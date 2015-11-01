<?php

class Coffee extends BaseBeverage {
  public function brew() {
    echo 'Making some coffee...' . PHP_EOL;
  }

  public function addCondiments() {
    echo 'Adding sugar and milk...' . PHP_EOL;
  }
}
