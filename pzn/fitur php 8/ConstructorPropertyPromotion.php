<?php

class Product{
    // public string $id;
    // public string $name;
    // public int $price;
    // public int $quantity;

    // public function __construct(string $id, string $name, int $price, int $quantity)
    // {
    //     $this->id = $id;
    //     $this->name = $name;
    //     $this->price = $price;
    //     $this->quantity = $quantity;
    // }
    
    //dengan adanya fitur ini kita bisa langsung membua properti didalam class
    //hanya dengan menaruhnya sebagai parameter di contruct
    

    public function __construct(public string $id,
                                public string $name,
                                public int $price = 0 ,
                                public int $quantity = 0,
                                private bool $expensive = false)
    {
    }
}

$product = new Product(id: "01", name: "Mie Ayam", price:15000);
var_dump($product);
echo $product->name;