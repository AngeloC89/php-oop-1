<?php
include_once __DIR__ . "/Category.php";
class Product
{
    public $title;
    public $price;
    public Category $category;
    public $cover;


    function __construct($title, $price, $category, $cover) {
        $this->title = $title;
        $this->price = $price;
        $this->category = $category;
        $this->cover = $cover;
    }
}