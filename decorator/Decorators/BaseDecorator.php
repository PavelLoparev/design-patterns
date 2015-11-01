<?php

abstract class BaseDecorator extends BaseCoffee {
  protected $baseCoffee;

  public function BaseDecorator(BaseCoffee $baseCoffee) {
    $this->baseCoffee = $baseCoffee;
  }
}
