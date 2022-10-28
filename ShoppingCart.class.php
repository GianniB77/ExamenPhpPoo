<?php

class ShoppingCart {

    public $items = array();
    private $idCart = 0;
    private static $numSerie = 0;

    public function __construct()
    {
        self::$numSerie++;
        $this->idCart = self::$numSerie;
    }

    public function getIdCart() {
        return $this->idCart;
    }

    public function __toString() {
        return "id : " . $this->getIdCart(). ". " . $this->itemCount() . implode("<br>", $this->items);
    }

    public function addItem ($item) {
        if($this->getTotalWeight() + $item->getWeight() < 10000){
            $this->items[] = $item; 
        }else {
            throw new Exception("Le poids dépasserait la limite donc ajout refusé");
        }
        
    }

    public function removeItem ($remove) {
        for($i =0; $i < count($this->items); $i++){
            if($remove->name == $this->items[$i]->name) {
                unset($this->items[$i]);
                return $remove . " a été retiré avec succès. <br>";
            }
        }
        return "L'élément à retirer n'a pas été trouvé.";
    }

    public function itemCount() {
        return "Il y a " . count($this->items) . " item(s) dans le panier.<br>";
    }


    public function totalPrice() {
        $total = 0;
        foreach ($this->items as $item) {
            $total += $item->getPrice();
        }
        echo number_format($total/100, 2) . " € <br>";
    }

    private function getTotalWeight() {
        $totalWeight = 0;
        foreach ($this->items as $item) {
            $totalWeight += $item->getWeight();
        }
        return $totalWeight;
    }

}

