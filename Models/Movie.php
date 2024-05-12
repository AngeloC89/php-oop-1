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
   
    public static function getMovies() {
        $data = file_get_contents("Models/movies_db.json", true);
        $arrayData = json_decode($data, true); 
        foreach ($arrayData as $movie) {
            $movies[] = new Movie($movie['title'], $movie['language'], $movie['price'], $movie['category'], $movie['cover']);
        }
        return $movies;
    }

}

