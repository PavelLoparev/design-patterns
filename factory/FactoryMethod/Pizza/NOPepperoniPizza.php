<?php

class NOPepperoniPizza extends PepperoniPizza {
  public function __construct() {
    parent::__construct();

    $this->type = 'New Orleans style ' . $this->getType();
  }
}
