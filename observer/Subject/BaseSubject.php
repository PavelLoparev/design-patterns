<?php

abstract class BaseSubject {
  protected $listeners = array();

  public function addListener($name, BaseListener $listener) {
    $this->listeners[$name] = $listener;
  }

  public function removeListener(BaseListener $listener) {
    unset($this->listeners[$listener->getName()]);
  }

  abstract public function notifyListeners();
}
