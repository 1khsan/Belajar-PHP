<?php

require_once "data/shape.php";

use Data\{shape,rectangle};

$shape = new shape();
echo $shape->getCorner() . PHP_EOL;

$rectangle = new rectangle();
echo $rectangle->getCorner() . PHP_EOL;
echo $rectangle->getParentCorner() . PHP_EOL;