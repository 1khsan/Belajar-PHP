<?Php

function Sayhello($name = "ahmad"){
    echo "hallo $name" . PHP_EOL;
}

Sayhello("Ihsan");
Sayhello();

function sum(int $first, int $last){
    $total = $first + $last;
    echo "Total $first + $last = $total" . PHP_EOL;
}
sum(10,10);
sum("10", "10");

// Argument list

function sumAll(...$values){
    $total = 0;
    foreach ($values as $value){
        $total += $value;
    }
    echo "Total " . implode(",", $values) . " = $total" . PHP_EOL;
}
sumAll(1,2,3,4,5);