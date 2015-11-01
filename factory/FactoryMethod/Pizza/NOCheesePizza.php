<?php

class NOCheesePizza extends CheesePizza {
  public function __construct() {
    parent::__construct();

    $this->type = 'New Orleans style ' . $this->getType();
  }
}
