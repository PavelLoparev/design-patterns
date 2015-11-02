<?php

class SoundSystemOnCommand implements CommandInterface {
  private $soundSystem;
  private $prevVolume;

  public function __construct(SoundSystem $soundSystem) {
    $this->soundSystem = $soundSystem;
  }

  public function execute() {
    $this->prevVolume = $this->soundSystem->getVolume();
    $this->soundSystem->setVolume(15);
  }

  public function undo() {
    $this->soundSystem->setVolume($this->prevVolume);
  }
}
