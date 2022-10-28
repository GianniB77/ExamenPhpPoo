<?php


class Ticket extends payable {

    private $reference;
    private $prix;
    private $taxPercentage = 2500;

    public function __construct($reference, $prix)
    {
        $this->reference = $reference;
        $this->prix = $prix;
        $this->taxPercentage = 2500;
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
        return $this->reference . ", " . number_format($this->prix/100, 2) . " €";
    }

    public function label() {
        return "Vous allez payé un ticket à " . number_format($this->prix/100, 2) . "€<br>";
    }

    public function cost() {
        return "Le coût de ce qui doit être payé en centimes est " . $this->prix . " centimes.<br>";
    }

    public function taxRatePerTenThousand() {
        return "La proportion du coût qui est de la taxe est " . $this->taxPercentage . " pour dix-milles.<br>";
    }
}