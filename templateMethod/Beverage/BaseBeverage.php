<?php

abstract class BaseBeverage {
  final public function makeBeverage() {
    $this->boilWater();
    $this->brew();
    $this->putIntoCup();
    $this->addCondiments();
  }

  final public function boilWater() {
    echo 'Boiling water...' . PHP_EOL;
  }

  final public function putIntoCup() {
    echo 'Putting into cup...' . PHP_EOL;
  }

  abstract public function brew();
  abstract public function addCondiments();
}
