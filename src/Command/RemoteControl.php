<?php

/**
 * @file
 * RemoteControl.php.
 */

namespace Patterns\Command;

use Patterns\Command\Commands\NoCommand;

/**
 * Class RemoteControl.
 *
 * @package Patterns\Command
 */
class RemoteControl {

  /**
   * @var array
   */
  private $onCommands;

  /**
   * @var array
   */
  private $offCommands;

  /**
   * @var \Patterns\Command\Commands\NoCommand
   */
  private $undoCommand;

  /**
   * RemoteControl constructor.
   */
  public function __construct() {
    $this->undoCommand = new NoCommand();
  }

  /**
   * @param \Patterns\Command\CommandInterface $onCommand
   * @param \Patterns\Command\CommandInterface $offCommand
   */
  public function addCommand(CommandInterface $onCommand, CommandInterface $offCommand) {
    $this->onCommands[] = $onCommand;
    $this->offCommands[] = $offCommand;
  }

  /**
   * @param $number
   */
  public function pushOnButton($number) {
    if (!empty($this->onCommands[$number])) {
      $this->onCommands[$number]->execute();
      $this->undoCommand = $this->onCommands[$number];
    }
  }

  /**
   * @param $number
   */
  public function pushOffButton($number) {
    if (!empty($this->offCommands[$number])) {
      $this->offCommands[$number]->execute();
      $this->undoCommand = $this->offCommands[$number];
    }
  }

  /**
   * Undo method.
   */
  public function pushUndoButton() {
    $this->undoCommand->undo();
  }

}
