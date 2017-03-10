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
   * @var string
   */
  protected $state = '';

  /**
   * @return string
   */
  final public function makeBeverage() {
    $this->boilWater();
    $this->brew();
    $this->putIntoCup();
    $this->addCondiments();

    return $this->state;
  }

  /**
   * Final method.
   */
  final public function boilWater() {
    $this->state .= 'Boiling water.';
  }

  /**
   * Final method.
   */
  final public function putIntoCup() {
    $this->state .= 'Putting into cup.';
  }

  /**
   * @return mixed
   */
  abstract public function brew();

  /**
   * @return mixed
   */
  abstract public function addCondiments();

}
