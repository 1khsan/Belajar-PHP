<?php

class Manager{
    var $name;
    function sayHello(string $name):void{
        echo "Hai $name, my name is Manager $this->name" . PHP_EOL;
    }
}

class VipePresident extends Manager{
    function sayHello(string $name):void{
        echo "Hai $name, my name is VP $this->name" . PHP_EOL;
    }
}