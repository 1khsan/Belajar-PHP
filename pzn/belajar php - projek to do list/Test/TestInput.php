<?php

require_once "../helper/Input.php";

$name = input("Nama");
echo "Hello $name" . PHP_EOL;

$channel = input("Channel");
echo $channel . PHP_EOL;
echo "saya $name dari $channel";