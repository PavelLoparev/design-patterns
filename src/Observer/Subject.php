<?php

/**
 * @file
 * Subject.php.
 */

namespace Patterns\Observer;

use SplObserver;
use SplSubject;

/**
 * Class Subject.
 *
 * @package Patterns\Observer
 */
class Subject implements SplSubject {

  /**
   * @var array
   */
  private $listeners = [];

  /**
   * @var mixed
   */
  private $data = NULL;

  /**
   * @return mixed
   */
  public function getData() {
    return $this->data;
  }

  /**
   * @inheritdoc
   */
  public function attach(SplObserver $observer) {
    $this->listeners[spl_object_hash($observer)] = $observer;
  }

  /**
   * @inheritdoc
   */
  public function detach(SplObserver $observer) {
    unset($this->listeners[spl_object_hash($observer)]);;
  }

  /**
   * @inheritdoc
   */
  public function notify() {
    foreach ($this->listeners as $listener) {
      $listener->update($this);
    }
  }

}
