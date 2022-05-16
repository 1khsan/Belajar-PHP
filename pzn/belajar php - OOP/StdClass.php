<?php

$array = [
    "First_name" => "Ahmad",
    "Middle_name" => "Ihsanullah",
    "Last_name" =>"Rabbani"
];
var_dump($array);

$object = (object) $array;
var_dump($object);

echo "First Name $object->First_name" . PHP_EOL;
echo "MIddle Name $object->Middle_name" . PHP_EOL;
echo "Last Name $object->Last_name" . PHP_EOL;

require_once "data/Person.php";

$person = new Person("ahmad","Bogor");
var_dump($person);

// $arrayperson = (array) $person;
// var_dump($arrayperson);