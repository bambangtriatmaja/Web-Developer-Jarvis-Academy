<?php

require_once 'animal.php';

class Frog extends Animal{
    
    public function infoAnimal(){
        $str = "{$this->getName()}<br> Legs : {$this->getLegs()}<br>{$this->getColdBlooded()}";
        return $str;
    }
    public function jump(){
        echo "hop hop";
    }

}