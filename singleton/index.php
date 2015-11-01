<?php

require_once('Singleton.php');

$singleton = Singleton::getInstance();
$singleton = Singleton::getInstance();
$clone = clone $singleton;