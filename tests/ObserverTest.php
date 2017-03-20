<?php

/**
 * @file
 * ObserverTest.php.
 */

namespace Patterns\Tests;

use PHPUnit\Framework\TestCase;
use Patterns\Observer\Subject;

/**
 * Class ObserverTest.
 *
 * @package Patterns\Tests
 */
class ObserverTest extends TestCase {

  /**
   * Check observer notifications.
   */
  public function testObserver() {
    $subject = new Subject('Test data');

    $mockListener1 = $this->getMockBuilder('Patterns\Observer\Listener')
      ->setMethods(['update'])
      ->getMock();

    $mockListener2 = $this->getMockBuilder('Patterns\Observer\Listener')
      ->setMethods(['update'])
      ->getMock();

    $mockListener1->expects($this->once())
      ->method('update')
      ->with($this->equalTo($subject));

    $mockListener2->expects($this->once())
      ->method('update')
      ->with($this->equalTo($subject));

    $subject->attach($mockListener1);
    $subject->attach($mockListener2);
    $subject->notify();
  }

  /**
   * Check observer remove listener method.
   */
  public function testObserverRemoveListenersMethod() {
    $subject = new Subject('Test data');

    $mockListener1 = $this->getMockBuilder('Patterns\Observer\Listener')
      ->setMethods(['update'])
      ->getMock();

    $mockListener2 = $this->getMockBuilder('Patterns\Observer\Listener')
      ->setMethods(['update'])
      ->getMock();

    $mockListener1->expects($this->once())
      ->method('update')
      ->with($this->equalTo($subject));

    $mockListener2->expects($this->never())
      ->method('update');

    $subject->attach($mockListener1);
    $subject->attach($mockListener2);
    $subject->detach($mockListener2);
    $subject->notify();
  }

}
