<?php

class Product {
    private int $id;
    public string $name;
    private float $price; 

    public function __construct($id, $productName, $priceValue) {
        $this->id = $id;
        $this->name = $productName;
        $this->price = $priceValue;  
    }
    
    public function getFormattedPrice(){
        return '$' . number_format($this->price, 2);
    }

    public function showDetails(){
        echo "Product Details:\n";
        echo "- ID: {$this->id}\n";
        echo "- Name: {$this->name}\n";
        echo "- Price: {$this->getFormattedPrice()}\n";
    }

}

$product = new Product(1, "T-Shirt", 20.0555);
$product->showDetails();