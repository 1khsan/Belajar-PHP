<?php

function increment(){
    static $counter = 0;
    echo "Counter = $counter" . PHP_EOL;
    $counter++;
}
increment();
increment();
increment();