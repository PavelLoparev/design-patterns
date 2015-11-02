<?php

class MacroCommand implements CommandInterface {
  private $commands = array();

  public function __construct(array $commands) {
    $this->commands = $commands;
  }

  public function execute() {
    foreach ($this->commands as $command) {
      if ($command instanceof CommandInterface) {
        $command->execute();
      }
    }
  }

  public function undo() {
    foreach ($this->commands as $command) {
      if ($command instanceof CommandInterface) {
        $command->undo();
      }
    }
  }
}
