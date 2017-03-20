<?php

/**
 * @file
 * Listener.php.
 */

namespace Patterns\Observer;

use SplObserver;
use SplSubject;

/**
 * Class Listener.
 *
 * @package Patterns\Observer
 */
class Listener implements SplObserver {

  /**
   * @inheritdoc
   */
  public function update(SplSubject $subject) {
    return $subject->getData();
  }

}
