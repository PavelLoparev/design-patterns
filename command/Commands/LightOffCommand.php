<?php

class LightOffCommand implements CommandInterface {
  private $light;

  public function __construct(Light $light) {
    $this->light = $light;
  }

  public function execute() {
    $this->light->off();
  }

  public function undo() {
    $this->light->on();
  }
}
