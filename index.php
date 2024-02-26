<?php

require_once __DIR__ '/Food.php';
require_once __DIR__ '/Game.php';
require_once __DIR__ '/Accessory.php';

$product1 = new Food("Pasta", 3.99, "Barilla");
$product2 = new Game("Palla da calcio", 19.99, "Champions");
$product3 = new Accessory("Mouse da gaming", 59.99, "Razer");