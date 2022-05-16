<?php

$nama = "Ahmad Ihsanullah Rabbani";

echo "Nama: " . $nama . PHP_EOL; 


// mengkonversi dari string ke number ataupun kebalikannya

$value_string = (string)100;
var_dump($value_string);
$value_int = (int)"100";
var_dump($value_int);
$value_float = (string)"100.1";
var_dump($value_float);

// Mengakses karakter di string 
$nama = "ihsan";
echo $nama[0] . PHP_EOL;
echo $nama[1] . PHP_EOL;
echo $nama[2] . PHP_EOL;
echo $nama[3] . PHP_EOL;
echo $nama[4] . PHP_EOL;

// variale parsing
echo "Hallo $nama, Selamat belajar PHP" . PHP_EOL;

// Curly brace
$var = "var";
echo "This is {$var}s" . PHP_EOL;