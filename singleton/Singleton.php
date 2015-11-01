<?php

class Singleton {
  private static $instance = null;

  private function __construct() {}

  public static function getInstance() {
    if (self::$instance === null) {
      echo 'Creating new object' . PHP_EOL;
      self::$instance = new Singleton();
    }
    else {
      echo 'Instance already exists.' . PHP_EOL;
    }

    return self::$instance;
  }

  private function __clone() {}
}
