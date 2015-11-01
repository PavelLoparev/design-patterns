<?php

class LightSystem {
  private $light = 0;

  public function setLight($light) {
    $this->light = $light;
    echo 'Setting light level to ' . $this->light . '...' . PHP_EOL;
  }
}
