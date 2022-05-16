<?php

function testMixed(mixed $data):mixed{
    if(is_array($data)){
        return [];
    }else if(is_string($data)){
        return "string";
    }else if (is_int($data)){
        return 1;
    }else {
        return null;
    }
}
// testmixed = gabungan dari seluruh union types
var_dump(testMixed([]));
var_dump(testMixed('ini string'));
var_dump(testMixed(123));
var_dump(testMixed(""));

function jumlah(int... $values){
    $total = 0;
    foreach($values as $value){
        $total = $value+$total;        
    }
    echo $total;
}

jumlah(10,10);