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
   * @var \Patterns\Strategy\Behavior\QuackInterface
   */
  protected $quackInterface;

  /**
   * @param \Patterns\Strategy\Behavior\QuackInterface $quackInterface
   */
  public function __construct(QuackInterface $quackInterface) {
    $this->quackInterface = $quackInterface;
  }

  /**
   * @return string
   */
  public function performQuack() {
    return $this->quackInterface->quack();
  }

  /**
   * @param \Patterns\Strategy\Behavior\QuackInterface $quackInterface
   */
  public function setQuackBehavior(QuackInterface $quackInterface) {
    $this->quackInterface = $quackInterface;
  }

}
