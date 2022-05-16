<?php

class Person{

    const AUTHOR = "Programmer Zaman Now";

    var string $name;
    var ?string $adress = null;
    var string $country = "Indonesia";

    function __construct(string $name, ?string $adress)
    {
        $this->name = $name;
        $this->adress = $adress;
    }
    function sayHello(?string $name){
        if (is_null($name)){
            echo "Hi, my name is $this->name dari $this->adress" . PHP_EOL;
        } else{
            echo "Hi $name, my name is $this->name dari $this->adress". PHP_EOL;
        }
    }
    function __destruct()
    {
        echo "Object Person $this->name is destroyed" . PHP_EOL;
    }
    function info(){
        echo "AUTHOR : ". self::AUTHOR .PHP_EOL;
        //self memanggil kontans didalam class
        //tidak perlu nama_kelas::NAMA-KONSTANT
        //karena ada didalam kelas juga ini fungsi
        //jadi menggunakan self saja,
        //jangan lupa concatnya
    }
}
// this keyword untuk mengakses objek saat ini
//untuk mengkases function itu berada
//istilahnya ketika menggunakan this kita menunjuk ke objeknya 
//setelah masuk ke objek kita dpaat membuat tanda ->
//untuk mengambil properti