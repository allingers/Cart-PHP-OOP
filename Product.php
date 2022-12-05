<?php

class Product
{
    private $id;
    private $title;
    private $price;
    private $inStock;

    public function __construct($id, $title, $price, $inStock) 
    {
        $this->id = $id;
        $this->title = $title;
        $this->price =$price;
        $this->inStock = $inStock;
    }

    public function getId() 
    {
        return $this-> id;
    }

    public function getTitle() 
    {
        return $this-> title;
    }

    public function getPrice() 
    {
        return $this-> price;
    }

    public function getInStock() 
    {
        return $this-> inStock;
    }

};
