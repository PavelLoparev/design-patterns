<?php

class BasePizza {
  protected $type;

  public function getType() {
    return $this->type;
  }

  public function prepare() {
    echo 'Preparing ' . $this->getType() . ' pizza...' . PHP_EOL;
  }

  public function bake() {
    echo 'Baking ' . $this->getType() . ' pizza...' . PHP_EOL;
  }

  public function cut() {
    echo 'Cutting ' . $this->getType() . ' pizza...' . PHP_EOL;
  }

  public function box() {
    echo 'Boxing ' . $this->getType() . ' pizza...' . PHP_EOL;
  }
}
