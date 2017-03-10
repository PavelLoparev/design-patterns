<?php

/**
 * @file
 * SingletonTest.php.
 */

namespace Patterns\Tests;

use PHPUnit\Framework\TestCase;
use Patterns\Singleton\Singleton;

/**
 * Class SingletonTest.
 *
 * @package Patterns\Tests
 */
class SingletonTest extends TestCase {

  /**
   * @var \ReflectionClass
   */
  private $reflection;

  /**
   * Test fixture.
   *
   * Get singleton reflection object.
   */
  public function setUp() {
    $this->reflection = new \ReflectionClass('Patterns\Singleton\Singleton');
  }

  /**
   * Check whether object can be instantiated externally.
   */
  public function testPrivateConstructor() {
    $this->assertFalse($this->reflection->getConstructor()->isPublic(), 'Object can not be instantiated externally');
  }

  /**
   * Check whether object can be cloned externally.
   */
  public function testPrivateMagicCloneMethod() {
    $this->assertFalse($this->reflection->getMethod('__clone')->isPublic(), 'Object can not be cloned');
  }

  /**
   * Check if singleton exists only in one instance.
   */
  public function testObjectInstantiating() {
    $singleton = Singleton::getInstance();
    $singletonOnceAgain = Singleton::getInstance();

    $this->assertTrue($singleton === $singletonOnceAgain, 'There is only one instance of Singleton class exists');
  }

}
