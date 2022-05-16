<?php

$a = 10 ;

$b = $a;
// pre increment
// sama saja seperti :
// $a = $a + 1;
// $b = $a;

$c = $a++;
// post increment
// sama saja seperti :
// $c = $a;
// $a = $a + 1;

var_dump($a);
var_dump($b);
var_dump($c);