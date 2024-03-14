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

    // Constructor
    function __construct($name, $duration, $genre)
    {
        $this->name = $name;
        $this->duration = $duration;
        $this->genre = $genre;
    }
}

$matrix = new Movie('Matrix', 120, 'Science');

var_dump($matrix);
