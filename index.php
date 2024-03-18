<?php

require_once __DIR__ . '/./app/Models/Movie.php';
require_once __DIR__ . '/database/db.php';

// Access to a static property with scope resolution operator
var_dump(Movie::$language);

// Static property from method
var_dump($matrix->staticLanguage());

// Access to a static method
var_dump(Movie::sayHi());

var_dump($matrix);
var_dump($avatar);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-OOP-1</title>
</head>

<body>

</body>

</html>