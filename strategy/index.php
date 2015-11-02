<?php

require_once('Ducks/MallardDuck.php');
require_once('Ducks/RubberDuck.php');
require_once('Behaviors/FlyWithWings.php');
require_once('Behaviors/FlyNoWay.php');
require_once('Behaviors/QuackQuack.php');
require_once('Behaviors/QuackSqueak.php');

$mallardDuck = new MallardDuck();
$mallardDuck->display();
$mallardDuck->setFlyBehavior(new FlyWithWings());
$mallardDuck->setQuackBehavior(new QuackQuack());
$mallardDuck->performFly();
$mallardDuck->performQuack();

echo '------------------' . PHP_EOL;

$rubberDuck = new RubberDuck();
$rubberDuck->display();
$rubberDuck->setFlyBehavior(new FlyNoWay());
$rubberDuck->setQuackBehavior(new QuackSqueak());
$rubberDuck->performFly();
$rubberDuck->performQuack();
