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

    public function getinfo() {
        return "Nome: $this->name <br> Prezzo: $this->price <br> Categoria: $this->type";
    }
}