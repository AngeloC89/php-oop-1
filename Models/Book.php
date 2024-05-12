<?php
include_once __DIR__ . "/Product.php";

class Book extends Product
{
    public $numPages;
    public function __construct($title, $numPages, $price, $category, $cover)
    {
        $this->numPages = $numPages;
        parent::__construct($title,$price,$category,$cover);
    }
   
};