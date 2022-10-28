<?php


class FreshItem extends Item() {

    private $bestBeforeDate;

    function __construct() {
        parent::__construct();
        $this->bestBeforeDate = $bestBeforeDate;
    }

    public function getBestBeforeDate() {
        return $this->bestBeforeDate;
    }

    function setName($bestBeforeDate) {
        $this->bestBeforeDate = $bestBeforeDate;
    }








}