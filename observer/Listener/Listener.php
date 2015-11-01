<?php

require_once('BaseListener.php');

class Listener extends BaseListener {
  public function update($data) {
    echo $this->getName() . PHP_EOL;
    echo $data . PHP_EOL;
    echo '---------' . PHP_EOL;
  }
}
