<?php

/**
 * @file
 * CommandInterface.php.
 */

namespace Patterns\Command;

/**
 * Interface CommandInterface.
 *
 * @package Patterns\Command
 */
interface CommandInterface {

  /**
   * @return mixed
   */
  public function execute();

  /**
   * @return mixed
   */
  public function undo();

}
