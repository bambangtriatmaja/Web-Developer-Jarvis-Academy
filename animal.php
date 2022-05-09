<?php

class Animal {
    public $name, 
    $legs,
    $cold_blooded;

    public function __construct($name="Name", $legs=4, $cold_blooded="no")
    {
       $this->name=$name;
       $this->legs=$legs;
       $this->cold_blooded=$cold_blooded;
    }
       
    public function getName(){
        return "Name: {$this->name}";
    }

    public function getLegs(){
        return "Legs : {$this->legs}";
    }

    public function getColdBlooded(){
        return "Cold Blooded : {$this->cold_blooded}";
    }
}