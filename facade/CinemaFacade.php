<?php

class CinemaFacade {
  private $projector;
  private $soundSystem;
  private $moviePlayer;
  private $lightSystem;

  public function __construct($projector, $soundSystem, $moviePlayer, $lightSystem) {
    $this->projector = $projector;
    $this->soundSystem = $soundSystem;
    $this->moviePlayer = $moviePlayer;
    $this->lightSystem = $lightSystem;
  }

  public function watchMovie($movie) {
    $this->projector->on();
    $this->lightSystem->setLight(10);
    $this->soundSystem->on();
    $this->soundSystem->setVolume(50);
    $this->moviePlayer->playMovie($movie);
  }

  public function turnOffCinema() {
    $this->lightSystem->setLight(100);
    $this->moviePlayer->off();
    $this->soundSystem->off();
    $this->projector->off();
  }

  public function getProjector() {
    return $this->projector;
  }

  public function getSoundSystem() {
    return $this->soundSystem;
  }

  public function getMoviePlayer() {
    return $this->moviePlayer;
  }

  public function getLightSystem() {
    return $this->lightSystem;
  }
}
