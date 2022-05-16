<?php
// continue sama saja ddenganmenyekip, dia akan turun ke pernytaan selanjutnya
for ($counter = 1 ; $counter <=100 ; $counter++){
    if ($counter % 2 == 0 ){
        continue;
    }
    echo "Ini adalah counter ke-$counter" . PHP_EOL;
};