<?php

require_once('CinemaFacade.php');
require_once('CinemaStaff/Projector.php');
require_once('CinemaStaff/LightSystem.php');
require_once('CinemaStaff/MoviePlayer.php');
require_once('CinemaStaff/SoundSystem.php');

$cinemaFacade = new CinemaFacade(
  new Projector(),
  new SoundSystem(),
  new MoviePlayer(),
  new LightSystem()
);
$cinemaFacade->watchMovie('No country for old man');

echo '--------------' . PHP_EOL;

$cinemaFacade->turnOffCinema();
