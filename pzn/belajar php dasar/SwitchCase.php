<?php

$nilai = "B";

switch ($nilai){
    case "A":
        echo "Anda lulus dengan sangat baik" . PHP_EOL;
        break;
    case "B":
    case "C":
        echo "Anda lulus" . PHP_EOL;
        break;
    case "D":
        echo "Anda tidak lulus" . PHP_EOL;
        break;
    default:
        echo "Mungkin anda salah jurusan" . PHP_EOL; 
        break;
}

if ($nilai == "A"){
    echo "Anda lulus dengan sangat baik";
} else if ($nilai == "B" || $nilai = "C"){
    echo "Anda lulus";
}else if ($nilai == "D"){
    echo "Anda Tidak lulus";
} else {
    "Anda tidak terdaftar";
}