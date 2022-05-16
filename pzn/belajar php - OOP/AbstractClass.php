<?php

require_once "data/Location.php";

use Data\{Location, City, Province, Country};

// $location = new Location; ERRROR abstrak kelas tidak bisa digunakan sebagi objek
//hanya childnya yang bisa

$city = new City();
$city->name = "Bogor";
$city->sayhello();
$Province= new Province();
$country = new Country();
$country->name = "Indonesia";
        $country->sayhello();