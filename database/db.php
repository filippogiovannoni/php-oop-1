<?php
require_once __DIR__ . '/../app/Models/Movie.php';

$matrix = new Movie('Matrix', 120, ['Science', 'Fantasy']);
$matrix->setPopcorn($matrix->duration);
$matrix_popcorn = $matrix->getPopcorn();

$avatar = new Movie('avatar', 80, ['Science', 'Fantasy']);
$avatar->setPopcorn($avatar->duration);
$avatar_popcorn = $avatar->getPopcorn();
