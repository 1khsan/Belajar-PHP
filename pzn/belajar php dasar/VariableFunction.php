<?php

// mengirim funsi ke dalam argumen
function sayHello(string $name, $filter){
    $finalname = $filter($name);
    echo "Hello $finalname" . PHP_EOL;
}

sayHello("ihsan", "strtoupper");
sayHello("ihsan", "strtolower");
