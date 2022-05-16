<?php

$data = ["action" => "hai"];

if (isset($data["action"])){
    $action = $data["action"];
} else{
    $action = "nothing";
}
echo $action . PHP_EOL;

$caracepat = $data["action"] ?? "nothing";
echo $caracepat;