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
   * Singleton instance.
   *
   * @var null
   */
  private static $instance = null;

  /**
   * Singleton constructor.
   */
  private function __construct() {}

  /**
   * Creates instance ob itself or returns existing one.
   *
   * @return null|\Patterns\Singleton\Singleton
   */
  public static function getInstance() {
    if (self::$instance === null) {
      self::$instance = new Singleton();
    }

    return self::$instance;
  }

  /**
   * Object of Singleton class can not be cloned.
   */
  private function __clone() {}

}
