<?php

$value = "E";
$result = "";

switch($value){
    case "A":
    case "B":
    case "C":
        $result = "Anda Lulus";
        break;
    case "D":
        $result = "Anda tidak lulus";
        break;
    case "E":
        $result = "Sepertinya anda salah jurusan";
        break;
    default:
        $result = "Nilai apa itu?";
}
echo $result . PHP_EOL;
//match expresion cocok digunakan ketika mendapat kasus switch case yang sederhana
//seperti if expresiion=> operator ternary 
//berbeda dengan switch case
//disini kita bisa menggunakan pengkondisian
$value = "A";
$result = match($value){
    "A","B","C" => "Anda Lulus",
    "D" => "Anda tidak lulus",
    "E" => "Sepertinya anda salah jurusan",
    default => "Nilai apa itu?"    
};
echo $result . PHP_EOL;


//match expression non equals
$value = 70;

$result = match(true){
    $value >= 80 => "A",
    $value >= 70 => "B",
    $value >= 60 => "C",
    $value >= 50 => "D",
    default => "E"
};

echo $result . PHP_EOL;

//match expression dengan kondisi
$name = " Ihsan";

$result = match(true){
    str_contains($name, "Mr.") => "hello sir",
    str_contains($name, "Mrs.") => "hello Mam",
    default => "Hello"
};
echo $result;
//opsi 1 = ternary operator
//opsi 2 = match expression