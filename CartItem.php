<?php

class CartItem
{
    private $product;
    private int $quantity;

    public function __construct($product, $quantity)
    {
        $this->product = $product;
        $this->quantity = $quantity;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function getProduct()
    {
        return $this->product;
    }

    // *** VG ***  
    public function increaseQuantity()
    {

        if ($this->product->getInStock() > $this->quantity) {
            $this->quantity += 1;
        } else {
            echo "<p>Kan ej lägga till produkt. Slut i lager</p>";
        }
    }
}