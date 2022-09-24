<?php

abstract class Animal
{
    private string $family;
    private string $food;

    public function __construct(string $family , string $food){
        $this->family = $family;
        $this->food = $food;
    }

    public function setFamily($family){
        $this->family = $family;
    }
    public function getFamily(){
        return $this->family;
    }
    public function setFood($food){
        $this->food = $food;
    }
    public function getFood(){
        return $this->food;
    }
}