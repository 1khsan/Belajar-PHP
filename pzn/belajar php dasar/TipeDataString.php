<?php

// single quote tidak mendukung \n(enter) dan \t(tabulasi)
echo 'Nama : ';
echo 'Ahmad Ihsanullah Rabbani';
// double quote
echo "Nama : ";
echo "Ahmad Ihsanullah Rabbani \n";

// haredoc (mirip dengan double quote dapat parsing vriable)
echo <<<EKO
selmat belajar PHP, ini adalah cara ketika  membuat string
bisa menggunakan haredoc. 
Tidak perlu ngetik enter karena akan otomatis dinter
ketika pndah bari dan bisa "kasih quote juga
"

EKO;

// nowdoc (mirip dengan single quote tidak dapat parsing vriable)
echo <<<'EKO'
selmat belajar PHP, ini adalah cara ketika  membuat string
bisa menggunakan nowdoc. 
Tidak perlu ngetik enter karena akan otomatis dinter
ketika pndah bari dan bisa "kasih quote juga"
EKO;