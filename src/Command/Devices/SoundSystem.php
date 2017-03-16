<?php

/**
 * @file
 * SoundSystem.php.
 */

namespace Patterns\Command\Devices;

/**
 * Class SoundSystem.
 *
 * @package Patterns\Command\Devices
 */
class SoundSystem {

  /**
   * @var int
   */
  private $volume;

  /**
   * @param $volume
   */
  public function __construct($volume) {
    $this->volume = $volume;
  }

  /**
   * @param $volume
   */
  public function setVolume($volume) {
    $this->volume = $volume;
  }

  /**
   * @return int
   */
  public function getVolume() {
    return $this->volume;
  }

}
