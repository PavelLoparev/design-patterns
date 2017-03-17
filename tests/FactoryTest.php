<?php

/**
 * @file
 * FactoryTest.php.
 */

namespace Patterns\Tests;

use Patterns\Factory\Factory;
use PHPUnit\Framework\TestCase;

/**
 * Class FactoryTest.
 *
 * @package Patterns\Tests
 */
class FactoryTest extends TestCase {

  /**
   * Check factory.
   */
  public function testFactory() {
    $cheesePizza = Factory::createPizza('cheese');
    $this->assertEquals('CheesePizza', $cheesePizza->getType());

    $pepperoniPizza = Factory::createPizza('pepperoni');
    $this->assertEquals('PepperoniPizza', $pepperoniPizza->getType());
  }

}
