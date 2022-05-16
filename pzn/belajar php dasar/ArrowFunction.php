<?php


$first_name = "Ahmad";
$last_name = "Ihsan";

$anonymusfunction = function () use ($first_name, $last_name){
    echo "hello $first_name $last_name" . PHP_EOL; 
};


$arrowFunction = fn () => "hello $first_name $last_name";

echo $anonymusfunction();
echo $arrowFunction();