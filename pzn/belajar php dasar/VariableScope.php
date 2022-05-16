<?php

//GLOBAL SCOPE
$name = "ihsan"; //global scope

function sayHello(){
    global $name; //global keyword untuk memanggil global scope
    echo $name . PHP_EOL;
}
sayHello();

//LOKAL SCOPE

function sayHello2(){
    $name = "Ihsan"; //lokal scope
    echo $name . PHP_EOL;
}
sayHello2();

//GLOBAL VAriable