<?php 

require_once 'data/Students.php';

$student1 = new Student();
$student1->id = '1';
$student1->nama = 'ihsan';
$student1->value = 100;


$student2 = new Student();
$student2->id = '1';
$student2->nama = 'ihsan';
$student2->value = 100;

// comparing object membandingkan dengan object lain 
// == (operator equal, semua properti harus sama)
//===(operator identitiy, bukan hanya properti namun juga object jadi ibjnya harus samaa)
var_dump($student1 == $student2);
var_dump($student1 === $student2);
var_dump($student1 === $student1);