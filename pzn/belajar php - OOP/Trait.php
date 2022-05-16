<?php

require_once "data/SayGoodBye.php";

use Traits\{Person, SayGoodBye, Hello };

$person = new Person();
$person ->GoodBye("Ihsan") ;
$person -> hello("");
$person->name = "ihsan"; //memanggil properties yang ada di Hasname
var_dump($person);

$person->run();