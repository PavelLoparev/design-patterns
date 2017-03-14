<?php

/**
 * @file
 * MenuItem.php.
 */

namespace Patterns\Composite;

/**
 * Class MenuItem.
 *
 * @package Patterns\Composite
 */
class MenuItem extends BaseMenuComponent {

  /**
   * @var string
   */
  private $name = '';

  /**
   * MenuItem constructor.
   * @param $name
   */
  public function __construct($name) {
    $this->name = $name;
  }

  /**
   * @return string
   */
  public function getName() {
    return $this->name;
  }

  /**
   * @param int $level
   *
   * @return string
   */
  public function printMenu($level = 0) {
    return $item = str_repeat('  ', $level) . '- ' . $this->getName() . PHP_EOL;
  }

}
