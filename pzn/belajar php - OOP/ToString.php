<?php

require_once 'data/Students.php';

$student1 = new Student();
$student1->id = "1";
$student1->name = "ihsan";
$student1->value = 100;
//cara 1
$string = (string) $student1;
echo$string;
//cara 2
