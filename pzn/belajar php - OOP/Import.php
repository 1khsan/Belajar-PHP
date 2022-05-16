<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

// use digunakan untuk memanggil kelas/fungsi yang berada di namespace
// dan di use tidak boleh ada nama clas yang sama

use Data\one\Conflict;
use function Helper\sayHello;
use const Helper\APPLICATION;

$conflict1 = new Conflict(); //conflist ini mengarah kepada konflict data\one
$conflist2 = new \Data\two\COnflict();

sayHello();
echo APPLICATION;