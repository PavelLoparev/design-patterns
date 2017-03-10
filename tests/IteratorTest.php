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
  public function testCurrentElementOnEmptyArray() {
    $iterator = new PhpIndexedArrayIterator([]);
    $this->assertNull($iterator->current(), 'There is no current element in an array.');
  }

  /**
   * Check current element.
   */
  public function testCurrentElement() {
    $iterator = new PhpIndexedArrayIterator([
      'Test 1',
      'Test 2',
    ]);
    $this->assertEquals('Test 1', $iterator->current(), 'Current element is equals "Test 1".');
    $iterator->next();
    $this->assertEquals('Test 2', $iterator->current(), 'Current element is equals "Test 2".');
  }

  /**
   * Check next element in empty array.
   */
  public function testNextElementOnEmptyArray() {
    $iterator = new PhpIndexedArrayIterator([]);
    $this->assertNull($iterator->next(), 'There are no more elements in an array.');
  }

  /**
   * Check next element.
   */
  public function testNextElementArray() {
    $iterator = new PhpIndexedArrayIterator([
      'Test 1',
      'Test 2',
    ]);
    $this->assertEquals('Test 2', $iterator->next(), 'Next element equals "Test 2".');
  }

}
