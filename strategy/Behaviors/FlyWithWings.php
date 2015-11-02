<?php

require_once('FlyInterface.php');

class FlyWithWings implements FlyInterface {
  public function fly() {
    echo 'Fly with wings!' . PHP_EOL;
  }
}
