<?php

require_once('QuackInterface.php');

class QuackSqueak implements QuackInterface {
  public function quack() {
    echo 'Squeak-squeak!' . PHP_EOL;
  }
}
