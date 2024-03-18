<?php

/**
 * Class Movie
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
