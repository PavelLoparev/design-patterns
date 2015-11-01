<?php

require_once('Beverage/BaseBeverage.php');
require_once('Beverage/Tea.php');
require_once('Beverage/Coffee.php');

$tea = new Tea();
$tea->makeBeverage();

echo '--------------' . PHP_EOL;

$coffee = new Coffee();
$coffee->makeBeverage();
