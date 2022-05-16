<?php

// reference terhadap variable
$name = "ihsan";

$othername = &$name;
$othername = "Budi" . PHP_EOL;

echo $name;


//pass by reference
function increment(int &$value){
    $value++;
}
$counter = 1;
increment($counter);

echo $counter. PHP_EOL;