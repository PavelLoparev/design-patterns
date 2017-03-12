<?php

/**
 * @file
 * SubjectInterface.php.
 */

namespace Patterns\Observer\Subject;

use Patterns\Observer\Listener\ListenerInterface;

/**
 * Interface SubjectInterface.
 *
 * @package Patterns\Observer
 */
interface SubjectInterface {

  /**
   * @param $name
   * @param \Patterns\Observer\Listener\ListenerInterface $listener
   */
  public function addListener($name, ListenerInterface $listener);

  /**
   * @param $name
   */
  public function removeListener($name);

  /**
   * @param $data
   */
  public function notify($data);

}
