<?php

require_once "data/Person.php";

$person1 = new Person("Ihsan" , "Bogor");
$person1->name = "Ihsan";
$person1->adress = "Kab.Bogor";
$person1->country = "Malaysia";

var_dump($person1);
echo "Name : $person1->name" . PHP_EOL;
echo "Adress : $person1->adress" . PHP_EOL;
echo "Country : $person1->country" . PHP_EOL;

$person2 = new Person("Ihsan", "Bogor");
$person2->name = "Ahmad";
$person2->addres = null;
var_dump($person2);