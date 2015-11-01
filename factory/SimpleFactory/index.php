<?php

require_once('SimpleFactory.php');
require_once('Pizza/BasePizza.php');
require_once('Pizza/CheesePizza.php');
require_once('Pizza/PepperoniPizza.php');

$pizza = SimpleFactory::createPizza('cheese');
$pizza->prepare();
$pizza->bake();
$pizza->cut();
$pizza->box();

echo '--------------' . PHP_EOL;

$pizza = SimpleFactory::createPizza('pepperoni');
$pizza->prepare();
$pizza->bake();
$pizza->cut();
$pizza->box();