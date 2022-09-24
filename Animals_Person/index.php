<?php
include "Animals\Lion.php";
include "Animals\Cow.php";
include "Persons\English.php";
include "Persons\German.php";
include "Persons\Frensh.php";


// First Animal Classed
$lion = new Lion();
$cow= new Cow();

echo $lion->getFamily();
echo "<br>";
echo $cow->getFamily();
echo "<br>";

// Animal Classed

// Person Class

(new English())->greet();
echo "<br>";
(new Frensh())->greet();
echo "<br>";
(new German())->greet();
echo "<br>";




// Person Class

