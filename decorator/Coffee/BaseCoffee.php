<?php

abstract class BaseCoffee {
  protected $description = 'Base coffee';

  public function getDescription() {
    return $this->description;
  }

  abstract public function cost();
}
