<?php

/**
 * @file
 * Duck.php.
 */

namespace Patterns\Strategy;

use Patterns\Strategy\Behavior\QuackInterface;

/**
 * Class Duck.
 *
 * @package Patterns\Strategy
 */
class Duck {

  /**
   * Duck interface to be used.
   *
   * @var \Patterns\Strategy\Behavior\QuackInterface
   */
  protected $quackInterface;

  /**
   * Duck constructor.
   *
   * @param \Patterns\Strategy\Behavior\QuackInterface $quackInterface
   */
  public function __construct(QuackInterface $quackInterface) {
    $this->quackInterface = $quackInterface;
  }

  /**
   * Performs 'quack' call.
   *
   * @return string
   */
  public function performQuack() {
    return $this->quackInterface->quack();
  }

  /**
   * Sets up interface for quacking.
   *
   * @param \Patterns\Strategy\Behavior\QuackInterface $quackInterface
   */
  public function setQuackBehavior(QuackInterface $quackInterface) {
    $this->quackInterface = $quackInterface;
  }

}
