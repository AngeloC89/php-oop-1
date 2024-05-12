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

    public static function getBooks() {
        $data = file_get_contents("Models/books_db.json", true);
        $arrayData = json_decode($data, true); 
        foreach ($arrayData as $book) {
            $books[] = new Book($book['title'], $book['numPages'], $book['price'], $book['category'], $book['cover']);
        }
        return $books;
    }
   
};