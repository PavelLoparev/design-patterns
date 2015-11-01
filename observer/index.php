<?php

require_once('Listener/Listener.php');
require_once('Subject/Subject.php');

$subject = new Subject();
$listener1 = new Listener('first', $subject);
$listener2 = new Listener('second', $subject);
$subject->notifyListeners();
