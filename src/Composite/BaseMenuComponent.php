<?php

/**
 * @file
 * BaseMenuComponent.php.
 */

namespace Patterns\Composite;

use LogicException;

/**
 * Class BaseMenuComponent.
 *
 * @package Patterns\Composite
 */
abstract class BaseMenuComponent {

  /**
   * @param \Patterns\Composite\BaseMenuComponent $menuComponent
   */
  public function add(BaseMenuComponent $menuComponent) {
    throw new LogicException('Unsupported method.');
  }

  /**
   * Needs to be overridden.
   */
  public function getName() {}

  /**
   * Needs to be overridden.
   *
   * @param int $level
   */
  public function printMenu($level = 0) {}

}
