<?php

/**
 * @file
 * Projector.php.
 */

namespace Patterns\Facade\CinemaStuff;

/**
 * Class Projector.
 *
 * @package Patterns\Facade\CinemaStuff
 */
class Projector {

  /**
   * @var int
   */
  private $state = 0;

  /**
   * Turns projector on.
   */
  public function on() {
    $this->state = 1;
  }

  /**
   * Turns projector off.
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

}
