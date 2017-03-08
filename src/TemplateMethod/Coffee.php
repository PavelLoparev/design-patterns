<?php

/**
 * @file
 * Coffee.php file.
 */

namespace Patterns\TemplateMethod;

/**
 * Class Coffee.
 *
 * @package Patterns\TemplateMethod
 */
class Coffee extends BaseBeverage {

  /**
   * Overridden method.
   */
  public function brew() {
    $this->state .= 'Making some coffee.';
  }

  /**
   * Overridden method.
   */
  public function addCondiments() {
    $this->state .= 'Adding sugar and milk.';
  }

}
