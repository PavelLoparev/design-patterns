<?php

require_once('Coffee/Espresso.php');
require_once('Decorators/Milk.php');
require_once('Decorators/Chocolate.php');

$espresso = new Espresso();
echo $espresso->getDescription() . ' $' . $espresso->cost() . PHP_EOL;

$espressoWithMilk = new Espresso();
$espressoWithMilk = new Milk($espressoWithMilk);
echo $espressoWithMilk->getDescription() . ' $' . $espressoWithMilk->cost() . PHP_EOL;

$espressoWithMilkAndChocolate = new Espresso();
$espressoWithMilkAndChocolate = new Milk($espressoWithMilkAndChocolate);
$espressoWithMilkAndChocolate = new Chocolate($espressoWithMilkAndChocolate);
echo $espressoWithMilkAndChocolate->getDescription() . ' $' . $espressoWithMilkAndChocolate->cost() . PHP_EOL;
