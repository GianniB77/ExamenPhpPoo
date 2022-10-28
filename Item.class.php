<?php

class Item {

    public $name = "";
    public $price;
    public $weight;


public function __construct($name, $price, $weight)
{
    $this->name = $name;
    $this->price = $price;
    $this->weight = $weight;
}

public function __toString() {
    return $this->name . ": " . number_format($this->price/100, 2) . " €";
  }

function setName($name) {
    $this->name = $name;
  }
  function getName() {
    return $this->name;
  }
  function setPrice($price) {
    $this->price = $price;
  }
  function getPrice() {
    return $this->price;
  }
  function setWeight($weight) {
    $this->weight = $weight;
  }
  function getWeight() {
    return $this->weight;
  }
}

