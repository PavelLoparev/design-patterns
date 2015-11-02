<?php

class NoCommand implements CommandInterface {
  public function execute() {}
  public function undo() {}
}
