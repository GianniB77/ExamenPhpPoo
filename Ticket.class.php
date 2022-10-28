<?php


class Ticket {

    private $reference;
    private $prix;

    public function __construct($reference, $prix)
    {
        $this->reference = $reference;
        $this->prix = $prix;
    }

    function setRef($reference) {
        $this->reference = $reference;
    }

    public function getReference() {
        return $this->reference;
    }

    public function setPrix($prix) {
        $this->prix = $prix;
    }

    public function getPrix() {
        return $this->prix;
    }

    public function __toString() {
        return $this->reference;
      }

}