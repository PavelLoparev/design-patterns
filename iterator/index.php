<?php

require_once('PhpArrayIterator/IteratorInterface.php');
require_once('PhpArrayIterator/PhpArrayIterator.php');

$iterator = new PhpArrayIterator(array(
  'test1' => 1,
  'test2' => 2,
  'test3' => 3,
  'test4' => 4,
  'test5' => 5,
));

while ($iterator->hasNext()) {
  echo $iterator->next() . PHP_EOL;
}
