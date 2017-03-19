<?php

/**
 * @file
 * IteratorTest.php.
 */

namespace Patterns\Tests;

use PHPUnit\Framework\TestCase;
use Patterns\Iterator\PhpIndexedArrayIterator;

/**
 * Class IteratorTest.
 *
 * @package Patterns\Tests
 */
class IteratorTest extends TestCase {

  /**
   * Check current element in empty array.
   */
  public function testHasNextElementOnEmptyArray() {
    $iterator = new PhpIndexedArrayIterator([]);
    $this->assertFalse($iterator->hasNext(), 'There is no next element in an array.');
  }

  /**
   * Check next element in empty array.
   */
  public function testNextElementOnEmptyArray() {
    $iterator = new PhpIndexedArrayIterator([]);
    $this->assertNull($iterator->next(), 'There is no next element in an array.');
  }

  /**
   * Check next element.
   */
  public function testNextElementArray() {
    $iterator = new PhpIndexedArrayIterator([
      'Test 1',
      'Test 2',
    ]);
    $this->assertEquals('Test 1', $iterator->next(), 'Next element equals "Test 1".');
    $this->assertEquals('Test 2', $iterator->next(), 'Next element equals "Test 2".');
    $this->assertNull($iterator->next(), 'There is no next element in an array.');
  }

}
