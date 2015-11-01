<?php

class TurkeyToDuckAdapter implements DuckInterface {
  private $turkey;

  public function __construct($turkey) {
    $this->turkey = $turkey;
  }

  public function quack() {
    $this->turkey->gobble();
  }

  public function fly() {
    $this->turkey->fly();
  }
}
