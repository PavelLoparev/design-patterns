<?php

abstract class BaseListener {
  private $name;
  private $subject;

  public function __construct($name, BaseSubject $subject) {
    $this->name = $name;
    $this->subject = $subject;
    $this->subject->addListener($this->getName(), $this);
  }

  public function getName() {
    return $this->name;
  }

  abstract public function update($data);
}
