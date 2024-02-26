<?php

require_once __DIR__ '/Food.php';
require_once __DIR__ '/Game.php';
require_once __DIR__ '/Accessory.php';
require_once __DIR__ '/Product.php';

$type = array("Cane", "Gatto", "Uccello", "Pesce");

$product1 = new Food("Croccantini", 12.99, "Cane");
$product2 = new Game("Gomitolo", 9.99, "Gatto");
$product3 = new Accessory("Cibo per pesci", 8.99, "Pesce");

