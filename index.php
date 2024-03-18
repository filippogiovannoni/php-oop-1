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
    // public $name;
    // public $duration;
    // public $genre;
    public $popcorn = false;

    // Static property
    public static $language = 'Italy';

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

    // Method with static property
    public function staticLanguage()
    {
        return self::$language;
    }

    // Static Function

    public static function sayHi()
    {
        return 'Hi!';
    }


    // Constructor
    function __construct(public string $name, public int $duration, public array $genres)
    {
        $this->name = $name;
        $this->duration = $duration;
        $this->genres = $genres;
    }
}

$matrix = new Movie('Matrix', 120, ['Science', 'Fantasy']);
$matrix->setPopcorn($matrix->duration);
$matrix_popcorn = $matrix->getPopcorn();

$avatar = new Movie('avatar', 80, ['Science', 'Fantasy']);
$avatar->setPopcorn($avatar->duration);
$avatar_popcorn = $avatar->getPopcorn();

// Access to a static property with scope resolution operator
var_dump(Movie::$language);

// Static property from method
var_dump($matrix->staticLanguage());

// Access to a static method
var_dump(Movie::sayHi());

var_dump($matrix);
var_dump($avatar);
