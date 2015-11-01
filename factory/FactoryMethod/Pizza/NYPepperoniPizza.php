<?php

class NYPepperoniPizza extends PepperoniPizza {
  public function __construct() {
    parent::__construct();

    $this->type = 'New York style ' . $this->getType();
  }
}
