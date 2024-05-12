<?php

include __DIR__ ."/Category.php";


class Movie
{
    public string $title;
    public float $price;
    public string $cover;
    public Category $category;
    

    public function __construct($title, $price, $category, $cover)
    {
        $this->title = $title;
        $this->price = $price;
        $this->category = $category;
        $this->cover = $cover;
    }

    public function getTitle()
    {
        return $this->title;
    }


}

