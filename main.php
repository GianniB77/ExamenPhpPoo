<?php

require_once('Item.class.php');
require_once('FreshItem.class.php');
require_once('ShoppingCart.class.php');
require_once('Ticket.class.php');
$item = new Item("corn flakes", 500, 1000);
$panier = new ShoppingCart();
$panier->addItem($item);
//var_dump($panier);
//echo $panier . "<br>";
$chewingGum = new Item("chewing gum", 403, 100);
//echo $panier->itemCount();
$panier->addItem($chewingGum);
echo $panier . "<br>";
//echo $panier . "<br>";
//echo $panier->itemCount();
//$panier->totalPrice();
echo $panier->getIdCart() . "<br>";
//$panier2 = new ShoppingCart();
//echo $panier2->getIdCart();
$chocolat = new FreshItem("chocolat", 350, 300, "2022-12-25");
//echo $panier->addItem($chocolat);
echo $chocolat;
$ticket = new Ticket("RGBY17032012 - Walles-France", 9000);
echo $ticket;
