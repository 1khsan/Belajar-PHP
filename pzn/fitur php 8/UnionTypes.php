<?php

class example {
    public string|int|bool|array $data;
}
//dengan adanya fitur union types
//dapat memberi type data lebih dari 1 
//ke property,aparameter, argument return value
$example = new example();
$example->data = "halo";
$example->data = 123;
$example->data = true;
$example->data = [];

function sampleFunction(string|array $data):string|array{
    if(is_array($data)){
        return ['array'];
    }else if(is_string($data)){
        return 'string';
    }
}
var_dump(sampleFunction('ihsan'));
var_dump(sampleFunction([]));