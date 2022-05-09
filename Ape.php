<?php

require_once 'animal.php';

class Ape extends Animal{
    
    function getLegs(){
        $legs = 2;
        return $legs;
    }
    public function infoAnimal(){
        $str = "{$this->getName()}<br> Legs : {$this->getLegs()}<br>{$this->getColdBlooded()}";
        return $str;
    }
    public function yell(){
        echo "Auooo";
    }

}