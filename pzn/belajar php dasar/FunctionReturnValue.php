<?php

function sum (int $first, int $last):int{
    $total =  $first + $last;
    return $total;
}
$nilai =  sum(10,10 . PHP_EOL);
var_dump($nilai);

// tidak  bisa mereturn array
function jumlah(int... $values){
    $total = 0;
    foreach($values as $value){
        echo $total = $value+$total;
    }
}

function getFinalValue(int $value):string{
    if ($value >= 80){
        return "A";
    }else if ($value >= 70){
        return "B";
    }else if ($value >= 60){
        return "c";
    }else if ($value >= 50){
        return "D";
    }else{
        return "E";
    }
    echo "upss" . PHP_EOL;

}
$score = getFinalValue(80);
var_dump($score);

$score = getFinalValue(50);
var_dump($score);