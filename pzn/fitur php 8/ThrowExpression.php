<?php


function sayhello(?string $name){
    if($name == null){
        throw new Exception ('tidak boleh null');
    }
    echo "Hello $name" . PHP_EOL;
}

function sayhelloExpression(?string $name){
    $result = $name != null ? "Hello $name": throw new Exception('tidak boleh null');
    echo $result; 
    
}
sayhello("ahmad");
sayhelloExpression('ihsan');
/*Throw adalah sebuah statement
Hal ini menyebabkan kadang kita kesulitan menggunakan throw di beberapa tempat 
yang membutuhkan expression, seperti ternary operator misalnya
Di PHP 8, sekarang throw adalah sebuah expression, artinya dia memiliki nilai, 
dan sekarang kita bisa gunakan di tempat-tempat yang memang membutuhkan expression, 
seperti ternary operator*/