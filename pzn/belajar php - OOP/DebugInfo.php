<?php

require_once 'data/Students.php';

$student1 = new Student();
$student1->id = "1";
$student1->name = "ihsan";
$student1->value = 100;
$student1->setSample("sample");


var_dump($student1);
//debuginfo = mengverride informasi menggunakan vardum