<?php

class Item {

    public $name = "";
    public $price;
    public $weight;
    private $taxPercentage = 1000;


public function __construct($name, $price, $weight)
{
    $this->name = $name;
    $this->price = $price;
    $this->weight = $weight;
    $this->taxPercentage = 1000;
}

public function __toString() {
    return $this->name . ": " . number_format($this->price/100, 2) . " €";
  }

public function setName($name) {
    $this->name = $name;
  }

public function getName() {
    return $this->name;
  }

public function setPrice($price) {
    $this->price = $price;
  }

public function getPrice() {
    return $this->price;
  }
  
public function setWeight($weight) {
    $this->weight = $weight;
  }
  
public function getWeight() {
    return $this->weight;
  }

public function getTaxPerThousand() {
  return $this->taxPercentage;
}
}

