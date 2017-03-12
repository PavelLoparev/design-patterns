<?php

/**
 * @file
 * Subject.php.
 */

namespace Patterns\Observer\Subject;

use Patterns\Observer\Listener\ListenerInterface;

/**
 * Class Subject.
 *
 * @package Patterns\Observer
 */
class Subject implements SubjectInterface {

  /**
   * @var array
   */
  private $listeners = [];

  /**
   * @param $name
   * @param \Patterns\Observer\Listener\ListenerInterface $listener
   */
  public function addListener($name, ListenerInterface $listener) {
    $this->listeners[$name] = $listener;
  }

  /**
   * @param $name
   */
  public function removeListener($name) {
    unset($this->listeners[$name]);
  }

  /**
   * @param $data
   */
  public function notify($data) {
    foreach ($this->listeners as $listener) {
      $listener->update($data);
    }
  }

}
