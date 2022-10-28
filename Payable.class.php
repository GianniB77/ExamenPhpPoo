<?php


abstract class payable {

    public function label() {
        return "Descriptif de ce qui doit etre payé";
    }

    public function cost() {
        return "Le coût de ce qui doit être payé en centimes.";
    }

    public function taxRatePerTenThousand() {
        return "La proportion du coût qui est de la taxe.";
    }

}