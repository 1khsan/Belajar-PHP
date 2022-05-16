<?php

// fungsi tidak menggunakan nama
// memrlukan ; di ahir kurung kurawal berbeda dengan fungsi yang memmiliki nama
// $sayHello = function (string $name){
//     echo "Hello $name" . PHP_EOL;
// };

// $sayHello("Budi");

function sayHai(string $name, $filter){
    $finalname = $filter($name);
    echo "Hello $name" . PHP_EOL;
}
sayHai("Ihsan", function(string $name):string{
    return strtoupper($name);
});
$filterFunction = function(string $name):string{
    return strtolower($name);
};
sayHai("Ahmad", $filterFunction);

$first_name = "Ahmad";
$last_name = "Ihsan";

$sayHelloIhsan = function () use ($first_name, $last_name){
    echo "hello $first_name $last_name" . PHP_EOL; 
};
$sayHelloIhsan();

