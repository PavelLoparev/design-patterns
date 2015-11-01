<?php

require_once('ducks/MallardDuck.php');
require_once('ducks/RubberDuck.php');
require_once('behaviors/FlyWithWings.php');
require_once('behaviors/FlyNoWay.php');
require_once('behaviors/QuackQuack.php');
require_once('behaviors/QuackSqueak.php');

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
