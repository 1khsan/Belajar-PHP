<?php

$names = ["Ahmad", "Ihsanullah", "rabbani"];

for ($i = 0 ; $i < count($names); $i++){
    echo "Data ke $i = $names[$i]". PHP_EOL;
}
foreach ($names as $key=>$name){
    echo "Data ke-$key = $name" . PHP_EOL;
}

$person = [
    "First_name" => "Ahmad",
    "Middle_name" => "Ihsanullah",
    "Last_name" => "Rabbani"
];

foreach($person as $key => $value){
    echo "$key : $value" . PHP_EOL;
}