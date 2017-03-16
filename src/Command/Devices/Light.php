<?php

/**
 * @file
 * Light.php.
 */

namespace Patterns\Command\Devices;

/**
 * Class Light.
 *
 * @package Patterns\Command\Devices
 */
class Light {

  /**
   * @var int
   */
  private $state = 0;

  /**
   * @return int
   */
  public function getState() {
    return $this->state;
  }

  /**
   * Switch light on.
   */
  public function on() {
    $this->state = 1;
  }

  /**
   * Switch light off.
   */
  public function off() {
    $this->state = 0;
  }

}
