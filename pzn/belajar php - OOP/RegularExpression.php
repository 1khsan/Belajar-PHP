<?php

$matches = [];
$result = preg_match_all("/mad|san|lah|din/i", "Ahmad Ihsanullah Rabbani", $matches);
//mad san lah sebagai pattern
//ahmad ihsanullah rabbani sebagai subjek
//$matches sebagai penampung jika pattern ditemukan di subjek
//(//i = incansensitive)

var_dump($matches);
var_dump($result);
 
$result = preg_replace("/anjing|bangsat/i", "***", "ada anjing ada bangsat");
//jka menemukan kata anjing dan bangsat akan direplace ke ***

var_dump($result);

$result = preg_split("/[\s,-]/", "Ahmad Ihsanullah Rabbani, Programmer Parung-panjang");
//jika menemukan \s = spasi biasa atau tab koma dan tanda strip
//subject akan dipotong dan dimasukan menjadi array

var_dump($result);