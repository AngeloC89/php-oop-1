<?php

include __DIR__ . "/Views/header.php";
include __DIR__ . "/Models/Movie.php";
$action = new Category('Action');

$movies = [
    new Movie("The Matrix", 19.99, $action, "https://image.tmdb.org/t/p/w342/kt9nqD0uOar8IVE9191HXhWOXKI.jpg"),
    new Movie("Babylon", 19.99, $action, "https://image.tmdb.org/t/p/w342/A46SghdyD9y7qQUxB5zOslospJ7.jpg"),
]





    ?>
<main class="container ">
    <h2>Movies</h2>
    <div class="row d-flex">
        <?php foreach ($movies as $movie) { ?>

            <div class="card mx-2 p-0" style="width: 18rem;">
                <div class="h-100 p-0">
                    <img class="card-img-top img-fluid h-100 " src="<?= $movie->cover ?> " alt="<?= $movie->title ?>">
                </div>
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <h3 class="card-text"><?= $movie->title ?></h3>
                    <p class="card-text"><?= $movie->price ?>.</p>

                </div>
            </div>

        <?php } ?>
    </div>

</main>

<?php
include __DIR__ . "/Views/footer.php";
?>