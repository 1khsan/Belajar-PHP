<?php

require_once "data/Students.php";

$student1 = new Student();
$student1->id = "1";
$student1->name = "ihsan";
$student1->value = 100;
$student1->setSample("III");


var_dump($student1);

$student2 = clone $student1;
var_dump($student2);

// //cara manual
// $student2 = new Student();
// $student1->id=$student1->id;
// $student1->name=$student1->name;
// $student1->value=$student1->value;

//$student1 => $student2 =>$student2->__clone()