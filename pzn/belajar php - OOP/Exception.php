<?php

require_once "exception/ValidationException.php"; //emanggil kelas exception
require_once "data/LoginRequest.php"; //memanggil kelass loginrequies
require_once "Helper/Validation.php";//memanggil funsi untuk ngecek errornya

$loginrequest = new LoginRequest();//buat objek
$loginrequest->username = "   ";
$loginrequest->password = "    ";

//agar program tidak berhenti kita akan menggunkan try and catch
//bertujuan untuk menangkap terjadi nya error yg disebabkan suatu function
//jika tidak ditangkap program akan dihentikan
//try{kita panggil method yang bisa menyebabkan exception}
//catch{kita bisa melakuakn sesuatu kika terjadi exception}
//1 catch bisa menangap 2 jenis exception

try{
    validateloginRequest($loginrequest);//method yg bisa menyebabkan error
    echo "valid" .PHP_EOL;
}catch(ValidationException | Exception $exception){//menyimpan error di $exception jika tidak terjadi error tidak akan ditangkap
    echo "Error : {$exception->getMessage()}" . PHP_EOL;//yang dieksekusi ketika eror
    var_dump($exception->getTrace());//debug atau mencari error
}finally{
    echo "ERROR ATAU TIDAK ERROR, AKAN TETAP DIEKSEKUSI" . PHP_EOL;
    //tida peduli di blok try nya terjadi error atau tidak 
    //dia akan tetap dieksekusi
}