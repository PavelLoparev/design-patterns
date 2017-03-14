<?php

/**
 * @file
 * MoviePlayer.php.
 */

namespace Patterns\Facade\CinemaStuff;

/**
 * Class MoviePlayer.
 *
 * @package Patterns\Facade\CinemaStuff
 */
class MoviePlayer {

  /**
   * @var string
   */
  private $currentMovie;

  /**
   * @var int
   */
  private $state = 0;

  /**
   * Turns player on.
   */
  public function on() {
    $this->state = 1;
  }

  /**
   * @param $movie
   */
  public function playMovie($movie) {
    $this->currentMovie = $movie;
  }

  /**
   * Turns player off.
   */
  public function off() {
    $this->state = 0;
  }

  /**
   * @return string
   */
  public function getCurrentMovie() {
    return $this->currentMovie;
  }

  /**
   * @return int
   */
  public function getState() {
    return $this->state;
  }

}
