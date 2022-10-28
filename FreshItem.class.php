<?php


class FreshItem extends Item {

    private $bestBeforeDate;
    private $taxPercentage;

    function __construct($name, $price, $weight, $bestBeforeDate) {
        parent::__construct($name, $price, $weight);
        $this->bestBeforeDate = $bestBeforeDate;
        $this->taxPercentage = 1000 - 10*(round($weight / 1000));
    }

    public function getBestBeforeDate() {
        return $this->bestBeforeDate;
    }

    public function setBestBeforeDate($bestBeforeDate) {
        $this->bestBeforeDate = $bestBeforeDate;
    }

    public function __toString() {
        return $this->bestBeforeDate . ", " . parent::__toString();
      }




}