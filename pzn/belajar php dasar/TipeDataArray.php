<?php

$nama_anggota = ['ihsan','hanip,','rehan', 100];
var_dump($nama_anggota);
// cek data
var_dump($nama_anggota[0]);
// ganti data
$nama_anggota[0] = 'budi'; 
var_dump($nama_anggota);
// hapus data
unset($nama_anggota[1]);
var_dump($nama_anggota);
// menambahkan data
$nama_anggota []= "joko";
var_dump($nama_anggota);
// menghitung total anggota array
var_dump(count($nama_anggota));

// array pun dapat berfungsi sebagai key map atau (key value seperti dictionary di python);

$isan = [
    "id" => "ihsan",
    "name" => "Ahmad Ihsanullah Rabbani",
    "age" => 18,
    "address" => [
        "city" => "Bogor",
        "country" => "Indonesia"
           ]
];

foreach($nama_anggota as $ahmad){
    echo $ahmad . PHP_EOL;
}
echo($isan["id"]);
echo($isan["address"]["country"]);

echo "nama ku {$isan["name"]} ";