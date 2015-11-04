<?php

require_once('Menus/BaseMenuComponent.php');
require_once('Menus/Menu.php');
require_once('Menus/MenuItem.php');

$menu = new Menu('Main menu');

$subMenu1 = new Menu('Sub menu 1');
$subMenu1->add(new MenuItem('Menu item 1.1'));
$subMenu1->add(new MenuItem('Menu item 1.2'));

$subMenu2 = new Menu('Sub menu 2');
$subMenu2->add(new MenuItem('Menu item 2.1'));
$subMenu2->add(new MenuItem('Menu item 2.2'));

$menu->add($subMenu1);
$menu->add($subMenu2);

$menu->printMenu();
