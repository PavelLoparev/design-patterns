<?php

class LightOnCommand implements CommandInterface {
  private $light;

  public function __construct(Light $light) {
    $this->light = $light;
  }

  public function execute() {
    $this->light->on();
  }

  public function undo() {
    $this->light->off();
  }
}
