<?php

/**
 * @file
 * ObserverTest.php.
 */

namespace Patterns\Tests;

use PHPUnit\Framework\TestCase;
use Patterns\Observer\Listener\Listener;
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
    $mock_listener_1 = $this->getMockBuilder('Patterns\Observer\Listener\Listener')
      ->setMethods(['update'])
      ->getMock();

    $mock_listener_2 = $this->getMockBuilder('Patterns\Observer\Listener\Listener')
      ->setMethods(['update'])
      ->getMock();

    $mock_listener_1->expects($this->once())
      ->method('update')
      ->with($this->equalTo('Test data'));

    $mock_listener_2->expects($this->once())
      ->method('update')
      ->with($this->equalTo('Test data'));

    $subject = new Subject('Test data');
    $subject->addListener('listener_1', $mock_listener_1);
    $subject->addListener('listener_2', $mock_listener_2);
    $subject->notify('Test data');
  }

  /**
   * Check observer remove listener method.
   */
  public function testObserverRemoveListenersMethod() {
    $mock_listener_1 = $this->getMockBuilder(Listener::class)
      ->setMethods(['update'])
      ->getMock();

    $mock_listener_2 = $this->getMockBuilder(Listener::class)
      ->setMethods(['update'])
      ->getMock();

    $mock_listener_1->expects($this->once())
      ->method('update')
      ->with($this->equalTo('Test data'));

    $mock_listener_2->expects($this->never())
      ->method('update');

    $subject = new Subject('Test data');
    $subject->addListener('listener_1', $mock_listener_1);
    $subject->addListener('listener_2', $mock_listener_2);
    $subject->removeListener('listener_2');
    $subject->notify('Test data');
  }

}
