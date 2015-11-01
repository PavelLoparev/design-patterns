<?php

require_once('FlyInterface.php');

class FlyNoWay implements FlyInterface {
  public function fly() {
    echo 'I can not fly!' . PHP_EOL;
  }
}
