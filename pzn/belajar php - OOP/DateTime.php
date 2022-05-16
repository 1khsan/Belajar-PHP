<?php

$datetime = new DateTime();
$datetime->setDate(2003,2,14);
$datetime->setTime(10,10,10);
$datetime->add(new DateInterval("P1Y")); //nambah 1 taun
//P1Y, P = Periode
$minusonemonth = new DateInterval("P1M"); 
$datetime->add($minusonemonth); 

var_dump($datetime);

$now = new DateTime();
var_dump($now);
$now->setTimezone(new DateTimeZone("America/Toronto"));
var_dump($now);

$string = $now->format("y-m-d H:i:s");
echo "waktu sekarang adalah $string" . PHP_EOL;

$date = DateTime::createFromFormat("Y-m-d H:i:s", "2022-2-22 10:10:10", new DateTimeZone("Asia/jakarta"));
if($date){
    var_dump($date);
}else{
    echo "Format Salah". PHP_EOL;
}