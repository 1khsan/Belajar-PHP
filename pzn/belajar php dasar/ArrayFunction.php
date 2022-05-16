<?php

$data = [1,2,3,4,5,6,7,8,9,10];

$data_result= (array_map(fn (int $value) => $value*10,$data));
var_dump($data_result);

var_dump($data);

$person = [
    "first_name" => "Ihsan",
    "last_name" => "Rabani"
];
unset($person['last_name']);
var_dump(array_keys($person));
var_dump(array_values($person));
var_dump(shuffle($data));