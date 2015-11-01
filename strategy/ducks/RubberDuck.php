<?php

require_once('BaseDuck.php');

class RubberDuck extends BaseDuck {
  public function display() {
    echo 'I am a Rubber Duck!' . PHP_EOL;
  }
}
