<?php

/**
 * @file
 * SoundSystemOnCommand.php.
 */

namespace Patterns\Command\Commands;

use Patterns\Command\CommandInterface;
use Patterns\Command\Devices\SoundSystem;

/**
 * Class SoundSystemOnCommand.
 *
 * @package Patterns\Command\Commands
 */
class SoundSystemOnCommand implements CommandInterface {

  /**
   * @var \Patterns\Command\Devices\SoundSystem
   */
  private $soundSystem;

  /**
   * @var int
   */
  private $prevVolume;

  /**
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
    $this->soundSystem->setVolume(15);
  }

  /**
   * Undo command.
   */
  public function undo() {
    $this->soundSystem->setVolume($this->prevVolume);
  }

}
