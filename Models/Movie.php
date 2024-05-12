<?php

include_once __DIR__ . "/Product.php";
class Movie extends Product
{

    public $language;
    public function __construct($title, $language, $price, $category, $cover)
    {
        $this->language = $language;
        parent::__construct($title, $price, $category, $cover);
    }
    public function getTitle()
    {
        echo $this->title;
    }


}

