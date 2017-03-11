<?php

/**
 * @file
 * Duck.php.
 */

namespace Patterns\Strategy;

/**
 * Class Duck.
 *
 * @package Patterns\Strategy
 */
class Duck {

  /**
   * @var \Patterns\Strategy\QuackInterface
   */
  protected $quackInterface;

  /**
   * @param \Patterns\Strategy\QuackInterface $quackInterface
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
   * @param \Patterns\Strategy\QuackInterface $quackInterface
   */
  public function setQuackBehavior(QuackInterface $quackInterface) {
    $this->quackInterface = $quackInterface;
  }

}
