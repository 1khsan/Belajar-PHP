<?php

//Mengenai faktorial 
//contoh menggunakan loop

function loop(int $value){
    $total = 1;
    for ($i=1; $i <= $value; $i++){
        $total *= $i;
    }
    return $total;
}

var_dump(loop(5));
var_dump(1*2*3*4*5);

//mengunakan recursive memanggil funsi didalam fungsi itu sendiri
//hanya saja recursive memiliki kelemahan dimana tidak dapat menempung data dalam jumlah yang sangat besar


function recursive(int $value):int{
    if ($value == 1){
        return 1;
    } else {
        return $value * recursive($value - 1);
    }

}
var_dump(recursive(5));

function loop2(int $nilai){
    if ($nilai == 0){
        echo "end loop" . PHP_EOL;
    } else{
        "hai-$nilai" . PHP_EOL;
        loop2($nilai - 1);
    }
}
loop2(10);