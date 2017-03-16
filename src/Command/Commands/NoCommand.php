<?php

/**
 * @file
 * NoCommand.php.
 */

namespace Patterns\Command\Commands;

use Patterns\Command\CommandInterface;

/**
 * Class NoCommand.
 *
 * @package Patterns\Command\Commands
 */
class NoCommand implements CommandInterface {

  /**
   * Execute command.
   */
  public function execute() {}

  /**
   * Undo command.
   */
  public function undo() {}

}
