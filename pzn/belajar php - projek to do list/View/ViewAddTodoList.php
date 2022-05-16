<?php

require_once __DIR__ . "/../Model/todoList.php";
require_once __DIR__ . "/../BusinessLogic/AddTodoList.php";
require_once __DIR__ . "/../helper/Input.php";

function ViewAddTodoList(){
    echo "Menambah TO-DO" . PHP_EOL;
    
    $todo = input("Todo (x untuk batal)");

    if($todo == "x"){
        echo "Batal Menambah TODO" . PHP_EOL;
    }else{
        AddTodoList($todo);
    }
    
}