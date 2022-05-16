<?php

require_once "data/Product.php";

$produk = new Product("ihsan", 30000);

echo $produk->getName() . PHP_EOL;
echo $produk->getPrice() . PHP_EOL;

$produk2 = new product_Dummy("ihsan", 5000);
$produk2->info();