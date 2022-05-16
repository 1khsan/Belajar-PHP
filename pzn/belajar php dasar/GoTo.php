<?php

// GOTO ADALAH KODE PROGRAM YANG DAPAT LONCAT-LONCAT, TIDAK DIANJURKAN DIGUNAKAN

goto a;
echo "hewllo world" . PHP_EOL;

a:
echo "Hello A";

$counter = 1;
while (true){
    echo "Ini adalah break ke-$counter" . PHP_EOL;
    $counter++;

    if ($counter >10){
        goto b;
    }
}
b:
echo "End Loop";