<?php

/**
 * @file
 * BaseBeverage.php.
 */

namespace Patterns\TemplateMethod;

/**
 * Class BaseBeverage.
 *
 * @package Patterns\TemplateMethod
 */
abstract class BaseBeverage {


  /**
   * String to be tested.
   *
   * @var string
   */
  protected $state = '';

  /**
   * Template method.
   */
  final public function makeBeverage() {
    $this->boilWater();
    $this->brew();
    $this->putIntoCup();
    $this->addCondiments();

    return $this->state;
  }

  /**
   * You can't override this method.
   */
  final public function boilWater() {
    $this->state .= 'Boiling water.';
  }

  /**
   * You can't override this method.
   */
  final public function putIntoCup() {
    $this->state .= 'Putting into cup.';
  }

  /**
   * Method to be overridden.
   *
   * @return mixed
   */
  abstract public function brew();

  /**
   * Method to be overridden.
   *
   * @return mixed
   */
  abstract public function addCondiments();

}
