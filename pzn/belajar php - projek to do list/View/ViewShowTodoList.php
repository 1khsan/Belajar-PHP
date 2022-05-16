<?php
require_once __DIR__ . "/../Model/todoList.php";
require_once __DIR__ . "/../BusinessLogic/ShowTodoList.php";
require_once __DIR__ . "/../BusinessLogic/AddTodoList.php";
require_once __DIR__ . "/../BusinessLogic/RemoveTodolist.php";
require_once __DIR__ . "/ViewAddTodoList.php";
require_once __DIR__ . "/ViewRemoveTodoList.php";
require_once __DIR__ . "/../helper/Input.php";


function ViewShowTodoList(){
    while (true){
        ShowTodoList();

        echo "Menu" . PHP_EOL;
        echo "1. Tambah Todo" . PHP_EOL;
        echo "2. Hapus Todo" . PHP_EOL;
        echo "3. keluar" . PHP_EOL;

        $pilihan = input("Menu");

        if ($pilihan == "1"){
            ViewAddTodoList();
        } else if ($pilihan == "2"){
            ViewRemoveTodoList();
        } else if ($pilihan == "3"){
            break;
        } else{
            echo "Pilihan tidak Dimengerti" . PHP_EOL;
        }
    }
    echo "Terimakasih sudah berkunjung". PHP_EOL;
}
    