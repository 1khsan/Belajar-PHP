<?php

require_once "data/Person.php";

$person1 = new Person("Ihsan", "Bogor");

$person1->sayHello('Ahmad');

$person2 = new Person("udin" , "Bogor");
$person2->sayHello(null);

$person1->info();
$person2->info();

// this keyword
//untuk mengkases function itu berada
//istilahnya ketika menggunakan this kita menunjuk ke objeknya 
//setelah masuk ke objek kita dpaat membuat tanda ->
//untuk mengambil properti