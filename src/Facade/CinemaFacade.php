<?php

/**
 * @file
 * CinemaFacade.php.
 */

namespace Patterns\Facade;

use Patterns\Facade\CinemaStuff\LightSystem;
use Patterns\Facade\CinemaStuff\MoviePlayer;
use Patterns\Facade\CinemaStuff\Projector;
use Patterns\Facade\CinemaStuff\SoundSystem;

/**
 * Class CinemaFacade.
 *
 * @package Patterns\Facade
 */
class CinemaFacade {

  /**
   * @var \Patterns\Facade\CinemaStuff\Projector
   */
  private $projector;

  /**
   * @var \Patterns\Facade\CinemaStuff\SoundSystem
   */
  private $soundSystem;

  /**
   * @var \Patterns\Facade\CinemaStuff\MoviePlayer
   */
  private $moviePlayer;

  /**
   * @var \Patterns\Facade\CinemaStuff\LightSystem
   */
  private $lightSystem;

  /**
   * @param \Patterns\Facade\CinemaStuff\Projector $projector
   * @param \Patterns\Facade\CinemaStuff\SoundSystem $soundSystem
   * @param \Patterns\Facade\CinemaStuff\MoviePlayer $moviePlayer
   * @param \Patterns\Facade\CinemaStuff\LightSystem $lightSystem
   */
  public function __construct(Projector $projector, SoundSystem $soundSystem, MoviePlayer $moviePlayer, LightSystem $lightSystem) {
    $this->projector = $projector;
    $this->soundSystem = $soundSystem;
    $this->moviePlayer = $moviePlayer;
    $this->lightSystem = $lightSystem;
  }

  /**
   * @param $movie
   */
  public function watchMovie($movie) {
    $this->projector->on();
    $this->lightSystem->setLight(10);
    $this->soundSystem->on();
    $this->soundSystem->setVolume(50);
    $this->moviePlayer->playMovie($movie);
  }

  /**
   * Turns off all needed stuff.
   */
  public function turnOffCinema() {
    $this->lightSystem->setLight(100);
    $this->moviePlayer->off();
    $this->soundSystem->setVolume(0);
    $this->soundSystem->off();
    $this->projector->off();
  }

  /**
   * @return Projector
   */
  public function getProjector() {
    return $this->projector;
  }

  /**
   * @return SoundSystem
   */
  public function getSoundSystem() {
    return $this->soundSystem;
  }

  /**
   * @return MoviePlayer
   */
  public function getMoviePlayer() {
    return $this->moviePlayer;
  }

  /**
   * @return LightSystem
   */
  public function getLightSystem() {
    return $this->lightSystem;
  }

}
