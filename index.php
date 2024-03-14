<?php
/*
- è definita una classe ‘Movie’
  => all'interno della classe sono dichiarate delle variabili d'istanza
  => all'interno della classe è definito un costruttore
  => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
*/

class Movie
{
    // Variables declaration
    public $name;
    public $duration;
    public $genre;
    public $popcorn = false;

    // Methods
    public function setPopcorn($duration)
    {
        if ($duration > 100) {
            $this->popcorn = true;
        }
    }

    public function getPopcorn()
    {
        return $this->popcorn;
    }


    // Constructor
    function __construct($name, $duration, $genre)
    {
        $this->name = $name;
        $this->duration = $duration;
        $this->genre = $genre;
    }
}

$matrix = new Movie('Matrix', 120, 'Science');
$matrix->setPopcorn($matrix->duration);
$matrix_popcorn = $matrix->getPopcorn();

$avatar = new Movie('avatar', 80, 'Science');
$avatar->setPopcorn($avatar->duration);
$avatar_popcorn = $avatar->getPopcorn();


var_dump($matrix);
var_dump($avatar);
