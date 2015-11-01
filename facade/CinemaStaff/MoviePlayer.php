<?php

class MoviePlayer {
  private $currentMovie;

  public function on() {
    echo 'Turning on the MoviePlayer...' . PHP_EOL;
  }

  public function playMovie($movie) {
    $this->currentMovie = $movie;
    echo 'Playing movie "' . $this->currentMovie . '""...' . PHP_EOL;
  }

  public function off() {
    echo 'Turning off the MoviePlayer...' . PHP_EOL;
  }
}
