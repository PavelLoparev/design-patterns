<?php

/**
 * @file
 * Listener.php.
 */

namespace Patterns\Observer\Listener;

/**
 * Class Listener.
 *
 * @package Patterns\Observer
 */
class Listener implements ListenerInterface {

  /**
   * @param $data
   * @return mixed
   */
  public function update($data) {
    return $data;
  }

}
