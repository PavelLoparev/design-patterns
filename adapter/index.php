<?php

require_once('Birds/DuckInterface.php');
require_once('Birds/Duck.php');
require_once('Birds/Turkey.php');
require_once('Birds/TurkeyToDuckAdapter.php');

$duck = new Duck();
$duck->quack();
$duck->fly();

echo '--------------' . PHP_EOL;

$turkey = new Turkey();
$turkey->gobble();
$turkey->fly();

echo '--------------' . PHP_EOL;

$turkeyAdapter = new TurkeyToDuckAdapter($turkey);
$turkeyAdapter->quack();
$turkeyAdapter->fly();
