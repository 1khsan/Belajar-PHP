<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

$conflict1 = new Data\one\Conflict();
$conflict1->sayHello();
$conflict2 = new Data\two\Conflict();

echo Helper\sayHello();
echo Helper\APPLICATION;
//cara memanggil class didalam namaspace
//awali dengan namanamespace\namafunsi yang ingin dijalankan