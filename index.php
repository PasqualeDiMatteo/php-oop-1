<?php

require_once __DIR__ . "/models/Movie.php";
require_once __DIR__ . "/models/Actors.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <title>PHP Movie</title>
</head>

<body>
    <div class="container">
        <h1 class="text-center">FILMS</h1>
        <?php foreach ($movies as $movie) : ?>
            <ul>
                <li><?= $movie->title ?></li>
                <li><?= $movie->releaseYear ?></li>
                <li>Actors</li>
                <ul>
                    <?php foreach ($movie->actors as $actor) : ?>
                        <li><?= $actor->getFullName() ?></li>
                    <?php endforeach ?>
                </ul>

            </ul>
        <?php endforeach ?>
    </div>
</body>

</html>