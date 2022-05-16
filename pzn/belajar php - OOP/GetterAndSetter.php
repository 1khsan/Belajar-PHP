<?php

require "data/Category.php";

$category = new Category();
$category->setName("Ahmad");
$category->setExpensive(true);
echo "Nama : {$category->getName()}" . PHP_EOL;
echo "Expensiv ? {$category->isExpensive()}" . PHP_EOL;