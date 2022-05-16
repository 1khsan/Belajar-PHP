<?php

function sayHello(string $first, string $middle = '' ,string $last):void{
    echo "Hello $first $middle $last" . PHP_EOL;
}
//without named argument
sayHello("Ahmad", "Ihsanullah", "Rabbani");
// sayHello("Ahmad", "Rabbani"); //ERROR

//use named argument
sayHello(last:"Rabbani",first:"Ahmad",middle:"Ihsanullah");
sayHello(first:"Ahmad", last:"Rabbani");