<?php

abstract class BaseDuck {
  protected $flyInterface;
  protected $quackInterface;

  abstract protected function display();

  public function performFly() {
    if ($this->flyInterface) {
      $this->flyInterface->fly();
    }
  }

  public function performQuack() {
    if ($this->quackInterface) {
      $this->quackInterface->quack();
    }
  }

  public function setFlyBehavior(FlyInterface $flyInterface) {
    $this->flyInterface = $flyInterface;
  }

  public function setQuackBehavior(QuackInterface $quackInterface) {
    $this->quackInterface = $quackInterface;
  }
}
