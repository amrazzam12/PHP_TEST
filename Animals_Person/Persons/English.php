<?php

include_once "Persons\Person.php";
class English implements Person
{

    public  function greet()
    {
        echo "Hello";
    }

}