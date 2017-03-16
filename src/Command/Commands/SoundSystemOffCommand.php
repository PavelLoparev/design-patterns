<?php

/**
 * @file
 * SoundSystemOffCommand.php.
 */

namespace Patterns\Command\Commands;

use Patterns\Command\CommandInterface;
use Patterns\Command\Devices\SoundSystem;

/**
 * Class SoundSystemOffCommand.
 *
 * @package Patterns\Command\Commands
 */
class SoundSystemOffCommand implements CommandInterface {

  /**
   * @var \Patterns\Command\Devices\SoundSystem
   */
  private $soundSystem;

  /**
   * @var int
   */
  private $prevVolume;

  /**
   * SoundSystemOffCommand constructor.
   * @param \Patterns\Command\Devices\SoundSystem $soundSystem
   */
  public function __construct(SoundSystem $soundSystem) {
    $this->soundSystem = $soundSystem;
  }

  /**
   * Execute command.
   */
  public function execute() {
    $this->prevVolume = $this->soundSystem->getVolume();
    $this->soundSystem->setVolume(0);
  }

  /**
   * Undo command.
   */
  public function undo() {
    $this->soundSystem->setVolume($this->prevVolume);
  }

}
