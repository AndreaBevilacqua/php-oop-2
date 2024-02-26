<?php 

class Product {
    protected $name;
    protected $price;
    protected $type;

    public function __construct($name, $price, $type) {
        
        $this->name = $name;
        $this->price = $price;
        $this->type = $type;
    }
}