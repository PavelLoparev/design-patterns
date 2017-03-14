<?php

/**
 * @file
 * CompositeTest.php.
 */

namespace Patterns\Tests;

use PHPUnit\Framework\TestCase;
use Patterns\Composite\Menu;
use Patterns\Composite\MenuItem;

/**
 * Class CompositeTest.
 *
 * @package Patterns\Tests
 */
class CompositeTest extends TestCase {

  /**
   * Check composition.
   */
  public function testComposition() {
    $menu = new Menu('Main menu');

    $subMenu1 = new Menu('Sub menu 1');
    $subMenu1->add(new MenuItem('Menu item 1.1'));
    $subMenu1->add(new MenuItem('Menu item 1.2'));

    $subMenu2 = new Menu('Sub menu 2');
    $subMenu2->add(new MenuItem('Menu item 2.1'));
    $subMenu2->add(new MenuItem('Menu item 2.2'));

    $subMenuForSubMenu2 = new Menu('Sub menu 3');
    $subMenuForSubMenu2->add(new MenuItem('Menu item 3.1'));
    $subMenuForSubMenu2->add(new MenuItem('Menu item 3.2'));

    $subMenu2->add($subMenuForSubMenu2);

    $menu->add($subMenu1);
    $menu->add($subMenu2);

    $expected_menu_tree = 'Main menu
  - Sub menu 1
    - Menu item 1.1
    - Menu item 1.2
  - Sub menu 2
    - Menu item 2.1
    - Menu item 2.2
    - Sub menu 3
      - Menu item 3.1
      - Menu item 3.2
';

    $this->assertEquals($expected_menu_tree, $menu->printMenu());
  }

  /**
   * Check that menu item can't add another items.
   *
   * @expectedException \LogicException
   * @expectedExceptionMessage Unsupported method
   */
  public function testMenuItemCantAddItems() {
    $menuItem = new MenuItem('Menu item');
    $menuItem->add(new MenuItem('New menu item'));
  }

}
