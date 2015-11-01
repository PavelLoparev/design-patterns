<?php

require_once('PizzaStore/BasePizzaStore.php');
require_once('PizzaStore/NYStylePizzaStore.php');
require_once('PizzaStore/NOStylePizzaStore.php');
require_once('Pizza/BasePizza.php');
require_once('Pizza/CheesePizza.php');
require_once('Pizza/PepperoniPizza.php');
require_once('Pizza/NYCheesePizza.php');
require_once('Pizza/NYPepperoniPizza.php');
require_once('Pizza/NOCheesePizza.php');
require_once('Pizza/NOPepperoniPizza.php');

$nyStyleStore = new NYStylePizzaStore();
$nyStyleStore->orderPizza('cheese');

echo '--------------' . PHP_EOL;

$noStyleStore = new NOStylePizzaStore();
$noStyleStore->orderPizza('pepperoni');
