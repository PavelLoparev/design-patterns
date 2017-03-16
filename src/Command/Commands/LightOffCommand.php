<?php

/**
 * @file
 * LightOffCommand.php.
 */

namespace Patterns\Command\Commands;

use Patterns\Command\CommandInterface;
use Patterns\Command\Devices\Light;

/**
 * Class LightOffCommand.
 *
 * @package Patterns\Command\Commands
 */
class LightOffCommand implements CommandInterface {

  /**
   * @var \Patterns\Command\Devices\Light
   */
  private $light;

  /**
   * @param \Patterns\Command\Devices\Light $light
   */
  public function __construct(Light $light) {
    $this->light = $light;
  }

  /**
   * Execute command.
   */
  public function execute() {
    $this->light->off();
  }

  /**
   * Undo command.
   */
  public function undo() {
    $this->light->on();
  }

}
