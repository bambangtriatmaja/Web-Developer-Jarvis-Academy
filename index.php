<?php

require_once 'animal.php';
require_once 'Frog.php';
require_once 'Ape.php';


$sheep = new Animal("Shaun");
echo $sheep->getName();
echo "<br>";
echo $sheep->getLegs();
echo "<br>";
echo $sheep->getColdBlooded();
echo "<br><br>";

$sungokong = new Ape("kera sakti");
echo $sungokong->infoAnimal();
echo "<br>";
$sungokong->yell();
echo "<br><br>";

$kodok = new Frog("buduk");
echo $kodok->infoAnimal();
echo "<br>";
$kodok->jump();