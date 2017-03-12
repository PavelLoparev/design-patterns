<?php

/**
 * @file
 * ListenerInterface.php.php.
 */

namespace Patterns\Observer\Listener;

/**
 * Interface ListenerInterface.
 *
 * @package Patterns\Observer
 */
interface ListenerInterface {

  /**
   * @param $data
   */
  public function update($data);

}
