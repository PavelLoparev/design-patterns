<?php

/**
 * @file
 * Menu.php.
 */

namespace Patterns\Composite;

/**
 * Class Menu.
 *
 * @package Patterns\Composite
 */
class Menu extends BaseMenuComponent {

  /**
   * @var string
   */
  private $name = '';

  /**
   * @var array
   */
  private $menuItems = array();

  /**
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
   * @param \Patterns\Composite\BaseMenuComponent $menuItems
   */
  public function add(BaseMenuComponent $menuItems) {
    $this->menuItems[] = $menuItems;
  }

  /**
   * @param int $level
   *
   * @return string
   */
  public function printMenu($level = 0) {
    $prefix = $level ? '- ' : '';
    $tree = str_repeat('  ', $level) . $prefix . $this->getName() . PHP_EOL;

    foreach ($this->menuItems as $menuItem) {
      $tree .= $menuItem->printMenu($level + 1);
    }

    return $tree;
  }

}
