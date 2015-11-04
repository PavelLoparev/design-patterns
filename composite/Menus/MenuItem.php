<?php

class MenuItem extends BaseMenuComponent {
  private $name;

  public function __construct($name) {
    $this->name = $name;
  }

  public function getName() {
    return $this->name;
  }

  public function printMenu() {
    echo '- ' . $this->getName() . PHP_EOL;
  }
}
