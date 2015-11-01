<?php

abstract class BasePizza {
  protected $cheese;

  abstract public function prepare();

  public function bake() {
    echo 'Baking...' . PHP_EOL;
  }

  public function cut() {
    echo 'Cutting...' . PHP_EOL;
  }

  public function box() {
    echo 'Boxing...' . PHP_EOL;
  }
}
