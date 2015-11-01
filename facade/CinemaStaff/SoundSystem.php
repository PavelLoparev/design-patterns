<?php

class SoundSystem {
  private $volume = 0;

  public function on() {
    echo 'Turning on the sound system...' . PHP_EOL;
  }

  public function setVolume($volume) {
    $this->volume = $volume;
    echo 'Setting volume level to ' . $this->volume . '...' . PHP_EOL;
  }

  public function off() {
    echo 'Turning off the sound system...' . PHP_EOL;
  }
}
