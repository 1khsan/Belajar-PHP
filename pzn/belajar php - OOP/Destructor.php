<?php 

require_once "data/Person.php";

$ahmad = new Person("Ahmad", "Bogor");
$ihsan = new Person("Ihsan", "Bogor");

echo "Program selesai" . PHP_EOL;

//karena program php selsei
//dfunction destruct akan terpanggil
//dan akan menghapus objek yang sudah ditentukan