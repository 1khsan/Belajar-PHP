<?php

$nilai = 70 ;
$absen = 90 ;

if ($nilai >= 80 && $absen >= 80){
    echo " NIlai Anda A" . PHP_EOL;
} else if ($nilai >= 70 && $absen >= 70){
    echo " NIlai Anda B" . PHP_EOL;
} else if ($nilai >= 60 && $absen >= 60){
    echo " NIlai Anda C" . PHP_EOL;
}
 else if ($nilai >= 50 && $absen >= 50){
    echo " NIlai Anda D" . PHP_EOL;
}
 else{
     echo "Nilai Anda E" . PHP_EOL;
 }