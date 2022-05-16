<?php
require_once "data/Person.php";


define("APP", "Belajar PHP OOP" );
const APP_VERSION = "1.1.0";

echo APP . PHP_EOL;
echo APP_VERSION . PHP_EOL;
echo Person::AUTHOR . PHP_EOL;

//untuk mengakses data konstanta didalam kelas
//tidak perlu membuat objek terlebih dahulu 
//karena khsus konstant dia menempel kedalam class
//bukan ke objek seperti properties