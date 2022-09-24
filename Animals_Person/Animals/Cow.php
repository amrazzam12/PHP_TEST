<?php

include_once "Animals\Animal.php";

class Cow extends Animal
{


    public function __construct()
    {
        parent::__construct("Milk Providers", "Grass");
    }

    private string $owner;

    public function setOwner($owner){
        $this->owner = $owner;
    }

    public function getOwner(){
        return $this->owner;
    }

}