<?php

// union, menggabungkan 2 vaariable

$nama = [
    "first_name" => "ahmad Ihsan"
];
$nama2 = [
    "first_name" => "Budi",
    "last_name" => "Rabbani"
];

$full = $nama + $nama2;
var_dump($full);


// enquality dan identity
$nama3 = [
    "first_name" => "Budi",
    "last_name" => "Rabbani"
];
$nama4 = [    
    "last_name" => "Rabbani",
    "first_name" => "Budi"
];
// enquality tidak memedulikan posisi yg terpenting key dan valuenya sama
var_dump($nama3 == $nama4);
// identity posisipun harus sama
var_dump($nama3 === $nama4);
