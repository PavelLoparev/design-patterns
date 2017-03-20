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
   * Check empty iterator.
   */
  public function testEmptyIterator() {
    $iterator = new PhpIndexedArrayIterator([]);
    $this->assertNull($iterator->current());
    $this->assertFalse($iterator->valid());
    $this->assertEquals(0, $iterator->key());
  }

  /**
   * Check iterator in while loop.
   */
  public function testIteratorInWhileLoop() {
    $array = [
      'Test 1',
      'Test 2',
    ];
    $i = 0;
    $iterator = new PhpIndexedArrayIterator($array);
    $iterator->rewind();

    while ($iterator->valid()) {
      $this->assertEquals($i, $iterator->key());
      $this->assertEquals($array[$iterator->key()], $iterator->current());
      $iterator->next();
      $i++;
    }

    $this->assertNull($iterator->current());
    $this->assertEquals(2, $iterator->key());
    $iterator->rewind();
    $this->assertEquals(0, $iterator->key());
  }

  /**
   * Check iterator in foreach loop.
   */
  public function testIteratorInForeachLoop() {
    $array = [
      'Test 1',
      'Test 2',
    ];
    $iterator = new PhpIndexedArrayIterator($array);

    foreach ($iterator as $key => $value) {
      $this->assertEquals($key, $iterator->key());
      $this->assertEquals($value, $iterator->current());
    }

    $this->assertNull($iterator->current());
    $this->assertEquals(2, $iterator->key());
    $iterator->rewind();
    $this->assertEquals(0, $iterator->key());
  }

}
