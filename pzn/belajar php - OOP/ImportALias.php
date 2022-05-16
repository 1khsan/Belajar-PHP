<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

// use digunakan untuk memanggil kelas/fungsi yang berada di namespace
// dan di use tidak boleh ada nama clas yang sama

use Data\one\Conflict as Conflict1;
use Data\two\Conflict as Conflict2;
use function Helper\sayHello as hello;
use const Helper\APPLICATION as APP;

$conflict1 = new Conflict1(); //conflist ini mengarah kepada konflict data\one
$conflict1->sayHello();
$conflist2 = new Conflict2();

hello();
echo APP;