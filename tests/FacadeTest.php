<?php

/**
 * @file
 * FacadeTest.php.
 */

namespace Patterns\Tests;

use PHPUnit\Framework\TestCase;
use Patterns\Facade\CinemaFacade;
use Patterns\Facade\CinemaStuff\Projector;
use Patterns\Facade\CinemaStuff\SoundSystem;
use Patterns\Facade\CinemaStuff\MoviePlayer;
use Patterns\Facade\CinemaStuff\LightSystem;

/**
 * Class FacadeTest.
 *
 * @package Patterns\Tests
 */
class FacadeTest extends TestCase {

  /**
   * Check if cinema turns on correctly.
   */
  public function testCinemaTurningOn() {
    $cinema = new CinemaFacade(new Projector(), new SoundSystem(), new MoviePlayer(), new LightSystem());
    $cinema->watchMovie('No country for old man');
    $this->assertEquals($cinema->getProjector()->getState(), 1);
    $this->assertEquals($cinema->getLightSystem()->getLight(), 10);
    $this->assertEquals($cinema->getSoundSystem()->getState(), 1);
    $this->assertEquals($cinema->getSoundSystem()->getVolume(), 50);
    $this->assertEquals($cinema->getMoviePlayer()->getCurrentMovie(), 'No country for old man');
  }

  /**
   * Check if cinema turns off correctly.
   */
  public function testCinemaTurningOff() {
    $cinema = new CinemaFacade(new Projector(), new SoundSystem(), new MoviePlayer(), new LightSystem());
    $cinema->watchMovie('No country for old man');
    $cinema->turnOffCinema();
    $this->assertEquals($cinema->getProjector()->getState(), 0);
    $this->assertEquals($cinema->getLightSystem()->getLight(), 100);
    $this->assertEquals($cinema->getSoundSystem()->getVolume(), 0);
    $this->assertEquals($cinema->getSoundSystem()->getState(), 0);
    $this->assertEquals($cinema->getMoviePlayer()->getCurrentMovie(), 'No country for old man');
  }

}
