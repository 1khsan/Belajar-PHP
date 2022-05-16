 <?php

// membuat clas acbstract dan fungsinya menggunakan interface 
//lebih aktif dan tidak perlu mendeklarasikan bahwa itu abstrack 
//karena secara default itu absract? 
//tidak boleh menggunakan properrties


require "data/Car.php";
use Data\{avanza};
$car = new avanza();
echo $car->driver();
echo $car->getTire();
echo $car->getBrand("erigo");
echo $car->IsMaintenance();
?>