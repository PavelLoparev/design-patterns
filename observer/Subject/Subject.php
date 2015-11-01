<?php

require_once('BaseSubject.php');

class Subject extends BaseSubject {
  public function notifyListeners() {
    foreach ($this->listeners as $listener) {
      $listener->update('test data');
    }
  }
}
