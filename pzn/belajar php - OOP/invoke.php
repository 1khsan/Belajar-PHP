<?php

require_once 'data/Students.php';

$student1 = new Student();
$student1->id = "1";
$student1->name = "ihsan";
$student1->value = 100;
echo $student1('ahmad', 'yakin');
//invoke function, ketika object diberikan tanda "()" maka
//invoke function yang akan dieksekusi