<?php

function sayHello(string $name, callable $filter){
    $final_name = call_user_func($filter, $name);
    echo "Hello $final_name" . PHP_EOL;
}

sayHello('Ahmad', "strtoupper");
sayHello('Ahmad', "strtolower");
sayHello('Ahmad', function (string $name):string{
    return strtoupper($name);
});
sayHello("Ahmad", fn($name) => strtolower($name));