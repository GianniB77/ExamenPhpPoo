<?php

require_once('Item.class.php');
require_once('ShoppingCart.class.php');
$item = new Item("corn flakes", 500, 1000);
$panier = new ShoppingCart();
$panier->addItem($item);
//var_dump($panier);
//echo $panier . "<br>";
$chewingGum = new Item("chewing gum", 403, 100);
$chocolat = new Item("chocolat", 350, 300);
//echo $panier->itemCount();
$panier->addItem($chewingGum);
echo $panier . "<br>";
echo $panier->addItem($chocolat);
//echo $panier . "<br>";
//echo $panier->itemCount();
//$panier->totalPrice();
echo $panier->getIdCart();
//$panier2 = new ShoppingCart();
//echo $panier2->getIdCart();