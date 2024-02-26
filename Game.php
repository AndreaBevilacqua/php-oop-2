<?php

require_once __DIR__ '/Product.php';

class Game extends Product {
    public function getInfo() {
        parent::getInfo();
        echo "Tipo: Gioco<br>";
    }
}