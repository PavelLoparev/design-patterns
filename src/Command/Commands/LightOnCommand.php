<?php

/**
 * @file
 * LightOnCommand.php.
 */

namespace Patterns\Command\Commands;

use Patterns\Command\CommandInterface;
use Patterns\Command\Devices\Light;

/**
 * Class LightOnCommand.
 *
 * @package Patterns\Command\Commands
 */
class LightOnCommand implements CommandInterface {

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
    $this->light->on();
  }

  /**
   * Undo command.
   */
  public function undo() {
    $this->light->off();
  }

}
