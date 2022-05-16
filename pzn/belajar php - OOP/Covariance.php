<?php

use Data\AnimalFood;
use Data\CatShelter;
use Data\Food;

require_once 'data/Animal.php';
require_once 'data/AnimalShelter.php';

$catshelter = new \Data\CatShelter();
$cat = $catshelter->adopt('Luna');
$cat->eat(new AnimalFood);

$dogshelter = new \Data\DogShelter();
$dog = $dogshelter->adopt('Doggy');
$dog->eat(new Food);