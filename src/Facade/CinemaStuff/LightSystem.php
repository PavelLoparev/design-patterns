<?php

/**
 * @file
 * LightSystem.php.
 */

namespace Patterns\Facade\CinemaStuff;

/**
 * Class LightSystem.
 *
 * @package Patterns\Facade\CinemaStuff
 */
class LightSystem {

  /**
   * @var int
   */
  private $light = 0;

  /**
   * @param $light
   */
  public function setLight($light) {
    $this->light = $light;
  }

  /**
   * @return int
   */
  public function getLight() {
    return $this->light;
  }

}
