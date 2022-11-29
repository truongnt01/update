<?php
include ("controllers/c_cart.php");
var_dump($_SESSION['cart']) ;
$c_cart = new c_cart();
$c_cart->index();


