<?php

require_once __DIR__ . '/./app/Models/Movie.php';
require_once __DIR__ . '/database/db.php';

/*
// Access to a static property with scope resolution operator
var_dump(Movie::$language);

// Static property from method
var_dump($matrix->staticLanguage());

// Access to a static method
var_dump(Movie::sayHi());

var_dump($matrix);
var_dump($avatar);
*/

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-OOP-1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>


    <header class="bg-light">
        <nav class="nav justify-content-center  ">
            <a class="nav-link active" href="#" aria-current="page">Active link</a>
            <a class="nav-link" href="#">Link</a>
            <a class="nav-link disabled" href="#">Disabled link</a>
        </nav>

    </header>

    <main class="mt-3">
        <div class="container">
            <div class="row">

                <?php foreach ($movies as $movie) : ?>

                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h3><?= $movie->name ?></h3>
                                <p><?= $movie->overview ?></p>
                            </div>
                            <div class="card-footer">
                                <?php foreach ($movie->genres as $genre) : ?>
                                    <span><?= $genre ?></span>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>

                <?php endforeach; ?>

            </div>
        </div>
    </main>


</body>

</html>