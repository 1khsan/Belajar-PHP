<?php

namespace Data;
//pewarisan bisa lebih dari 1
interface HasBrand{ //interface = abstract
    function getBrand():string;
}

interface IsMaintenance{
    function IsMaintenance():bool;
}
interface car extends HasBrand{ //menggunakan extend jika inheritance sesama interface
    //jika extens sesama interface boleh lebih dari 1
    public function driver():void;

    public function getTire():int;
}
class avanza implements car, IsMaintenance{ //menggunkan implemets inheritance interface -> class
    public function driver():void
    {
        echo "Hello Avanza" .PHP_EOL;    
    }

    public function getTire():int
    {
        return 4 . PHP_EOL;
    }     
    
    function getBrand():string
    {
        return "Toyota" . PHP_EOL;
    }

    function IsMaintenance(): bool
    {
        return false;
    }
    
    
}