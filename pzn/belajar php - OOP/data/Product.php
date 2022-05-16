<?php

class Product{
    protected string $name;
    protected int $price;

    public function __construct(string $name, int $price)
    {
        $this->name = $name; 
        $this->price = $price; 
    }

    public function getName():string{
        return $this->name;
    }
    public function getPrice():int{
        return $this->price;
    }
};

class product_Dummy extends Product{
    public function info(){
        echo "name $this->name" . PHP_EOL;
    }
};

//tingkatan usability
//car/public = dapat diakses dari manapun
//protected dapat diakses dari kelasnya dan turunannya
//private hanya untuk kelasnya sendiri