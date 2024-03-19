<?php
require_once __DIR__ . '/../app/Models/Movie.php';

$matrix = new Movie('Matrix', 120, ['Science', 'Fantasy'], '');
$matrix->setPopcorn($matrix->duration);
$matrix_popcorn = $matrix->getPopcorn();

$avatar = new Movie('avatar', 80, ['Science', 'Fantasy'], '');
$avatar->setPopcorn($avatar->duration);
$avatar_popcorn = $avatar->getPopcorn();

$movies = [$matrix, $avatar];

$matrix->setOverview("Matrix è un film di fantascienza del 1999 diretto dai fratelli Wachowski, in cui un hacker di nome Neo scopre la verità dietro la realtà simulata in cui vive e si unisce alla resistenza per combattere le macchine che controllano l'umanità.");
$avatar->setOverview("Matrix è un film di fantascienza del 1999 diretto dai fratelli Wachowski, in cui un hacker di nome Neo scopre la verità dietro la realtà simulata in cui vive e si unisce alla resistenza per combattere le macchine che controllano l'umanità.");
