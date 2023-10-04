<?php
class Product {
    // TODO: Add properties
    private int $id;
    private string $name;
    private float $price;


    
    public function __construct($id, $name, $price) {
        // TODO: Initialize properties
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    
    // TODO: Add getFormattedPrice method
    public function getFormattedPrice(): string{
        return sprintf("%.2f", $this->price);
    }



    // TODO: Add showDetails method
    public function showDetails(){
        $outputString = "Product Details:".PHP_EOL;
        $outputString .= "- ID: ".$this->id.PHP_EOL;
        $outputString .= "- Name: ".$this->name.PHP_EOL;
        $outputString .= "- Price: ".$this->getFormattedPrice().PHP_EOL;

        echo $outputString;
    }
}


// Test the Product class
$product = new Product(1, 'T-shirt', 19.99);
$product->showDetails();


?>