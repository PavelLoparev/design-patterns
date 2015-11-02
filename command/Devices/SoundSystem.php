<?php

class SoundSystem {
  private $volume;

  public function __construct($volume) {
    $this->volume = $volume;
  }

  public function setVolume($volume) {
    $this->volume = $volume;
    echo 'Setting volume level to ' . $this->volume . '...' . PHP_EOL;
  }

  public function getVolume() {
    return $this->volume;
  }
}
