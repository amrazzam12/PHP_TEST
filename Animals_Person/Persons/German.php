<?php

include_once "Persons\Person.php";

class German implements Person
{

    public function greet()
    {
        echo "Hallo (in German)";
    }

}