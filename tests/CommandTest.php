<?php

/**
 * @file
 * CommandTest.php.
 */

namespace Patterns\Tests;

use PHPUnit\Framework\TestCase;
use Patterns\Command\Commands\MacroCommand;
use Patterns\Command\Commands\LightOffCommand;
use Patterns\Command\Commands\LightOnCommand;
use Patterns\Command\Commands\SoundSystemOffCommand;
use Patterns\Command\Commands\SoundSystemOnCommand;
use Patterns\Command\Devices\Light;
use Patterns\Command\Devices\SoundSystem;
use Patterns\Command\RemoteControl;

/**
 * Class CommandTest.
 *
 * @package Patterns\Tests
 */
class CommandTest extends TestCase {

  /**
   * Check remote control on/off commands.
   */
  public function testRemoteControlSimpleCommands() {
    $remoteControl = new RemoteControl();
    $light = new Light();
    $soundSystem = new SoundSystem(0);

    $remoteControl->addCommand(new LightOnCommand($light), new LightOffCommand($light));
    $remoteControl->addCommand(new SoundSystemOnCommand($soundSystem), new SoundSystemOffCommand($soundSystem));

    $this->assertEquals(0, $light->getState());
    $this->assertEquals(0, $soundSystem->getVolume());

    // Turn light on.
    $remoteControl->pushOnButton(0);
    $this->assertEquals(1, $light->getState());

    // Turn light off.
    $remoteControl->pushOffButton(0);
    $this->assertEquals(0, $light->getState());

    // Turn sound system on.
    $remoteControl->pushOnButton(1);
    $this->assertEquals(15, $soundSystem->getVolume());

    // Turn sound system off.
    $remoteControl->pushOffButton(1);
    $this->assertEquals(0, $soundSystem->getVolume());
  }

  /**
   * Check remote control undo command.
   */
  public function testRemoteControlSimpleUndoCommands() {
    $remoteControl = new RemoteControl();
    $light = new Light();
    $soundSystem = new SoundSystem(0);

    $remoteControl->addCommand(new LightOnCommand($light), new LightOffCommand($light));
    $remoteControl->addCommand(new SoundSystemOnCommand($soundSystem), new SoundSystemOffCommand($soundSystem));

    // Undo switching light off.
    $remoteControl->pushOnButton(0);
    $remoteControl->pushOffButton(0);
    $remoteControl->pushUndoButton();
    $this->assertEquals(1, $light->getState());

    // Undo switching sound system off.
    $remoteControl->pushOnButton(1);
    $remoteControl->pushOffButton(1);
    $remoteControl->pushUndoButton();
    $this->assertEquals(15, $soundSystem->getVolume());
  }

  /**
   * Check remote control macro command.
   */
  public function testRemoteControlMacroCommand() {
    $remoteControl = new RemoteControl();
    $light = new Light();
    $soundSystem = new SoundSystem(0);

    $macroOnCommand = new MacroCommand([new LightOnCommand($light), new SoundSystemOnCommand($soundSystem)]);
    $macroOffCommand = new MacroCommand([new LightOffCommand($light), new SoundSystemOffCommand($soundSystem)]);

    $remoteControl->addCommand($macroOnCommand, $macroOffCommand);

    // Turn light and sound system on.
    $remoteControl->pushOnButton(0);
    $this->assertEquals(1, $light->getState());
    $this->assertEquals(15, $soundSystem->getVolume());

    // Turn light and sound system off.
    $remoteControl->pushOffButton(0);
    $this->assertEquals(0, $light->getState());
    $this->assertEquals(0, $soundSystem->getVolume());
  }

  /**
   * Check remote control undo macro command.
   */
  public function testRemoteControlUndoMacroCommand() {
    $remoteControl = new RemoteControl();
    $light = new Light();
    $soundSystem = new SoundSystem(0);

    $macroOnCommand = new MacroCommand([new LightOnCommand($light), new SoundSystemOnCommand($soundSystem)]);
    $macroOffCommand = new MacroCommand([new LightOffCommand($light), new SoundSystemOffCommand($soundSystem)]);

    $remoteControl->addCommand($macroOnCommand, $macroOffCommand);

    // Undo turning light and sound system off.
    $remoteControl->pushOnButton(0);
    $remoteControl->pushOffButton(0);
    $remoteControl->pushUndoButton();
    $this->assertEquals(1, $light->getState());
    $this->assertEquals(15, $soundSystem->getVolume());
  }

}
