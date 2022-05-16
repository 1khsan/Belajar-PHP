<?php

require_once __DIR__ . "/../BusinessLogic/RemoveTodolist.php";
require_once __DIR__ . "/../helper/Input.php";


function ViewRemoveTodoList(){
    echo "Menghapus TODO" . PHP_EOL;

    $pilihan = input("Nomor (x untuk batalkan)");
    if ($pilihan == "x"){
        echo "Batal Hapus ToDo" . PHP_EOL;
    }else{
        $succes = RemoveTodoList($pilihan);

        if ($succes){
            echo "Anda sukses menghapus to do di nomor $pilihan" . PHP_EOL; 
        }else{
            echo "Gagal menghapus to do di nomor $pilihan" . PHP_EOL;
        }
    }
   
}