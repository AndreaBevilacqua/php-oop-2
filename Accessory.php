<?php

require_once __DIR__ '/Product.php';

class Accessory extends Product {
    public function getInfo() {
        parent::getInfo();
        echo "Tipo: Accessorio<br>";
    }
}