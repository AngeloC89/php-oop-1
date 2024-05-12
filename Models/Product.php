<?php

class Product
{
    public $title;
    public $price;
    public string $category;
    public $cover;


    function __construct($title, $price, $category, $cover) {
        $this->title = $title;
        $this->price = $price;
        $this->category = $category;
        $this->cover = $cover;
    }

  
}  
