<?php

/**
 * @file
 * SoundSystem.php.
 */

namespace Patterns\Facade\CinemaStuff;

/**
 * Class SoundSystem.
 *
 * @package Patterns\Facade\CinemaStuff
 */
class SoundSystem {

  /**
   * @var int
   */
  private $volume = 0;

  /**
   * @var int
   */
  private $state = 0;

  /**
   * Turns sound system on.
   */
  public function on() {
    $this->state = 1;
  }

  /**
   * @param $volume
   */
  public function setVolume($volume) {
    $this->volume = $volume;
  }

  /**
   * Turns sound system off.
   */
  public function off() {
    $this->state = 0;
  }

  /**
   * @return int
   */
  public function getState() {
    return $this->state;
  }

  /**
   * @return int
   */
  public function getVolume() {
    return $this->volume;
  }

}
