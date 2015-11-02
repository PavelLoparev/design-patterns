<?php

class Remote {
  private $onCommands;
  private $offCommands;
  private $undoCommand;

  public function __construct() {
    $this->undoCommand = new NoCommand();
  }

  public function addCommand(CommandInterface $onCommand, CommandInterface $offCommand) {
    $this->onCommands[] = $onCommand;
    $this->offCommands[] = $offCommand;
  }

  public function pushOnButton($number) {
    if (!empty($this->onCommands[$number])) {
      $this->onCommands[$number]->execute();
      $this->undoCommand = $this->onCommands[$number];
    }
  }

  public function pushOffButton($number) {
    if (!empty($this->offCommands[$number])) {
      $this->offCommands[$number]->execute();
      $this->undoCommand = $this->offCommands[$number];
    }
  }

  public function pushUndoButton() {
    echo 'Undo...' . PHP_EOL;
    $this->undoCommand->undo();
  }
}
