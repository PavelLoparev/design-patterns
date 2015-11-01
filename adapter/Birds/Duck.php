<?php

class Duck implements DuckInterface {
  public function quack() {
    echo 'Duck is quacking...' . PHP_EOL;
  }

  public function fly() {
    echo 'Duck is flying...' . PHP_EOL;
  }
}
