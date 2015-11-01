<?php

require_once('PizzaStore/BasePizzaStore.php');
require_once('PizzaStore/NYStylePizzaStore.php');
require_once('PizzaStore/NOStylePizzaStore.php');
require_once('Pizza/BasePizza.php');
require_once('Pizza/CheesePizza.php');
require_once('Factory/PizzaIngredientFactoryInterface.php');
require_once('Factory/NYPizzaIngredientFactory.php');
require_once('Factory/NOPizzaIngredientFactory.php');
require_once('PizzaIngredient/Cheese.php');
require_once('PizzaIngredient/MozzarellaCheese.php');
require_once('PizzaIngredient/ReggianoCheese.php');

$nyStyleStore = new NYStylePizzaStore();
$nyStyleStore->orderPizza('cheese');

echo '--------------' . PHP_EOL;

$noStyleStore = new NOStylePizzaStore();
$noStyleStore->orderPizza('cheese');
