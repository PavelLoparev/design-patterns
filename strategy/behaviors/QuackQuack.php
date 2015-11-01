<?php

require_once('QuackInterface.php');

class QuackQuack implements QuackInterface {
  public function quack() {
    echo 'Quack-quack!' . PHP_EOL;
  }
}
