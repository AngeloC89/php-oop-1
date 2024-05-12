<?php

include __DIR__ . "/Views/header.php";
include __DIR__ . "/Models/Movie.php";
include __DIR__ . "/Models/Book.php";


    


$movies = Movie::getMovies();
//var_dump($movies);
$books = Book::getBooks();
// var_dump($books);

// $movies = [
//     new Movie("Babylon", 'en', 19.99, $action, "https://image.tmdb.org/t/p/w342/kt9nqD0uOar8IVE9191HXhWOXKI.jpg"),
//     new Movie("Miraculous", 'en', 19.99, $action, "https://image.tmdb.org/t/p/w342/A46SghdyD9y7qQUxB5zOslospJ7.jpg"),
// ];

// $books = [
//     new Book("Unlocking Android", 416, 30.99, $openSource, "https://s3.amazonaws.com/AKIAJC5RLADLUMVRPFDQ.book-thumb-images/ableson.jpg"),
//     new Book("Zend Framework", 432, 27.49, $internet, "https://s3.amazonaws.com/AKIAJC5RLADLUMVRPFDQ.book-thumb-images/allmon.jpg"),
// ];





?>
<main>
    <section class="container my-4">
        <h2>Movies</h2>
        <div class="row d-flex">
            <?php foreach ($movies as $movie) { ?>

                <div class="card mx-2 p-0" style="width: 18rem;">
                    <div class="h-100 p-0">
                        <img class="card-img-top img-fluid h-100 " src="<?= $movie->cover ?> " alt="<?= $movie->title ?>">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <h3 class="card-text text-truncate "><?= $movie->title ?></h3>
                        <p class="card-text"> <?= $movie->category ?></p>
                        <p class="card-text">€ <?= $movie->price ?>.</p>

                    </div>
                </div>

            <?php } ?>
        </div>

    </section>

    <section class="container my-4 ">
        <h2>Books</h2>
        <div class="row d-flex">
            <?php foreach ($books as $book) { ?>

                <div class="card mx-2 p-0" style="width: 18rem;">
                    <div class="h-100 p-0">
                        <img class="card-img-top img-fluid h-100 " src="<?= $book->cover ?> " alt="<?= $book->title ?>">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <h3 class="card-text text-truncate "><?= $book->title ?></h3>
                        <p class="card-text"> <?= $book->category ?></p>
                        <p class="card-text">Pages <?= $book->numPages ?></p>
                        <p class="card-text">€ <?= $book->price ?></p>

                    </div>
                </div>

            <?php } ?>
        </div>


    </section>

</main>

<?php
include __DIR__ . "/Views/footer.php";
?>