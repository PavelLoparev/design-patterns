<?php

/**
 * @file
 * Singleton.php.
 */

namespace Patterns\Singleton;

/**
 * Class Singleton.
 *
 * @package Patterns\Singleton
 */
class Singleton {

  /**
   * @var mixed
   */
  private static $instance = null;

  /**
   * Singleton constructor.
   */
  private function __construct() {}

  /**
   * @return null|\Patterns\Singleton\Singleton
   */
  public static function getInstance() {
    if (self::$instance === null) {
      self::$instance = new Singleton();
    }

    return self::$instance;
  }

  /**
   * Singleton magic clone method.
   */
  private function __clone() {}

}
