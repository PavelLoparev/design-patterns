<?php

require_once('Remote.php');
require_once('Commands/CommandInterface.php');
require_once('Commands/LightOnCommand.php');
require_once('Commands/LightOffCommand.php');
require_once('Commands/SoundSystemOnCommand.php');
require_once('Commands/SoundSystemOffCommand.php');
require_once('Commands/NoCommand.php');
require_once('Commands/MacroCommand.php');
require_once('Devices/Light.php');
require_once('Devices/SoundSystem.php');

$remote = new Remote();

$light = new Light();
$soundSystem = new SoundSystem(0);

$remote->addCommand(new LightOnCommand($light), new LightOffCommand($light));
$remote->addCommand(new SoundSystemOnCommand($soundSystem), new SoundSystemOffCommand($soundSystem));

$remote->pushOnButton(0);
$remote->pushOffButton(0);
$remote->pushOnButton(1);
$remote->pushOffButton(1);

echo '--------------' . PHP_EOL;

$remote->pushOnButton(0);
$remote->pushOffButton(0);
$remote->pushUndoButton();
$remote->pushOnButton(1);
$remote->pushOffButton(1);
$remote->pushUndoButton();

echo '--------------' . PHP_EOL;

$macroCommandRemote = new Remote();

$macroOnCommand = new MacroCommand(array(new LightOnCommand($light), new SoundSystemOnCommand($soundSystem)));
$macroOffCommand = new MacroCommand(array(new LightOffCommand($light), new SoundSystemOffCommand($soundSystem)));

$macroCommandRemote->addCommand($macroOnCommand, $macroOffCommand);
$macroCommandRemote->pushOnButton(0);
$macroCommandRemote->pushOffButton(0);

echo '--------------' . PHP_EOL;

$macroCommandRemote->pushOnButton(0);
$macroCommandRemote->pushOffButton(0);
$macroCommandRemote->pushUndoButton();
