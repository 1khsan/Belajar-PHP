<?php

require_once "Data/animal.php";

use Data\{Animal, Cat, Dog};

$cat = new Cat();
$cat->name = "kiy" ;
$cat->run();

$dog = new Dog();
$dog->name = "jack";
$dog->run();