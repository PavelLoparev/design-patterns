<?php

class NYCheesePizza extends CheesePizza {
  public function __construct() {
    parent::__construct();

    $this->type = 'New York style ' . $this->getType();
  }
}
