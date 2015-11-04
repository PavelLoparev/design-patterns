<?php

abstract class BaseMenuComponent {
  public function add(BaseMenuComponent $menuComponent) {
    throw new LogicException('Unsupported method.');
  }

  public function getName() {
    throw new LogicException();
  }

  public function printMenu() {
    throw new LogicException();
  }
}
