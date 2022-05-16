<?php

require_once "Helper/MathHelper.php";
use Helper\MathHelper;

echo MathHelper::$nama;
echo $result= MathHelper::sum(26.265, 9.765, 147.0156, 221.265, 0.0002, 66.015, 23.765,78.765) . PHP_EOL;
echo $result/8;