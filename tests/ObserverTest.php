<?php

/**
 * @file
 * ObserverTest.php.
 */

namespace Patterns\Tests;

use PHPUnit\Framework\TestCase;
use Patterns\Observer\Subject\Subject;

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
    $mockListener1 = $this->getMockBuilder('Patterns\Observer\Listener\Listener')
      ->setMethods(['update'])
      ->getMock();

    $mockListener2 = $this->getMockBuilder('Patterns\Observer\Listener\Listener')
      ->setMethods(['update'])
      ->getMock();

    $mockListener1->expects($this->once())
      ->method('update')
      ->with($this->equalTo('Test data'));

    $mockListener2->expects($this->once())
      ->method('update')
      ->with($this->equalTo('Test data'));

    $subject = new Subject('Test data');
    $subject->addListener('listener_1', $mockListener1);
    $subject->addListener('listener_2', $mockListener2);
    $subject->notify('Test data');
  }

  /**
   * Check observer remove listener method.
   */
  public function testObserverRemoveListenersMethod() {
    $mockListener1 = $this->getMockBuilder('Patterns\Observer\Listener\Listener')
      ->setMethods(['update'])
      ->getMock();

    $mockListener2 = $this->getMockBuilder('Patterns\Observer\Listener\Listener')
      ->setMethods(['update'])
      ->getMock();

    $mockListener1->expects($this->once())
      ->method('update')
      ->with($this->equalTo('Test data'));

    $mockListener2->expects($this->never())
      ->method('update');

    $subject = new Subject('Test data');
    $subject->addListener('listener_1', $mockListener1);
    $subject->addListener('listener_2', $mockListener2);
    $subject->removeListener('listener_2');
    $subject->notify('Test data');
  }

}
