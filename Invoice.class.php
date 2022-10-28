<?php

class Invoice {

    private toBePayed = array();
    
    public function __construct() {

    }

    public function addPayable($p) {
        $this->toBePayed[] = $p;
    }
}