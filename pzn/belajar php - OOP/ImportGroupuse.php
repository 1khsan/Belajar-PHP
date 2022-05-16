<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

//mengimpor banyak kelas di satu namespace
use Data\one\{Conflict as conflict1, Dummy as dum , Sampel as samp};
use function Helper\{sayHello as say, sapa };

$conflict1 = new conflict1();
$conflict1->sayHello();
$dummy = new dum();
$sampel = new samp();

say();
sapa();


