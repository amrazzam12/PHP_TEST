<?php

include_once "Animals\Animal.php";

class Lion extends Animal
{


    public function __construct()
    {
        parent::__construct("Dangerous Animals", "Meat");
    }



}