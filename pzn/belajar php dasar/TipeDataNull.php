<?php

$name = "ihsan";
$name = null;
$age = null;
echo "Nama : ";
echo $name;
echo"\n";

echo $age;
echo "\n";
// untuk mengecek variable kosong apa tidak menggunakan is_null(variable) hasilnya boolean
$is_null = is_null($name);
echo "Apakah data name null ? ";
var_dump($is_null);
echo"\n";

// untuk menghapus variable menggunakan unset unset(nama_variable)

$umur = 18;
unset($umur);
// dan untuk mengecek variable lebih baik menggunkana isset, mengecek variable ada apa tidak, sekaligus mengecek isinya null atay tidak isset(nama_variable)
$name2 = "Ahmad";
 var_dump(isset($name2));

//  bacanya apakah data itu ada??
// jika ternyata daa isinya dia bernilai true
// sedangkan jika kosong bernilai false
