<?php

require_once "data/Programmer.php";
//kemampunan untuk merubah bentuk
// dapat mengambil parent kelas dan childnya 

$company = new Company;
$company ->programmer= new Programmer("Ahmad");
var_dump($company);

$company->programmer= new frontEndProgrammer("Ihsan");
var_dump($company);

$company->programmer= new BackEndProgrammer("Rabbani");
var_dump($company);


SayHelloProgrammer(new Programmer("Ahmad"));
SayHelloProgrammer(new frontEndProgrammer("Ihsan"));
SayHelloProgrammer(new BackendProgrammer("Rabbani"));