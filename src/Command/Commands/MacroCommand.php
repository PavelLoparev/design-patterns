<?php

/**
 * @file
 * MacroCommand.php.
 */

namespace Patterns\Command\Commands;

use Patterns\Command\CommandInterface;

/**
 * Class MacroCommand.
 *
 * @package Patterns\Command\Commands
 */
class MacroCommand implements CommandInterface {

  /**
   * @var array
   */
  private $commands = [];

  /**
   * MacroCommand constructor.
   * @param array $commands
   */
  public function __construct(array $commands) {
    $this->commands = $commands;
  }

  /**
   * Execute command.
   */
  public function execute() {
    foreach ($this->commands as $command) {
      if ($command instanceof CommandInterface) {
        $command->execute();
      }
    }
  }

  /**
   * Undo command.
   */
  public function undo() {
    foreach ($this->commands as $command) {
      if ($command instanceof CommandInterface) {
        $command->undo();
      }
    }
  }

}
