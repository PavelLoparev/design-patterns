<?php

class Menu extends BaseMenuComponent {
  private $name;
  private $menuItems = array();

  public function __construct($name) {
    $this->name = $name;
  }

  public function getName() {
    return $this->name;
  }

  public function add(BaseMenuComponent $menuItems) {
    $this->menuItems[] = $menuItems;
  }

  public function printMenu() {
    echo $this->getName() . PHP_EOL;

    foreach ($this->menuItems as $menuItem) {
      echo $menuItem->printMenu();
    }
  }
}
