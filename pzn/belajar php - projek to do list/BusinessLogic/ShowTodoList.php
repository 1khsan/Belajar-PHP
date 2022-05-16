<?php

//Menampilkan todo list

function ShowTodoList(){
    global $todolist;

    echo "TODOLIST" . PHP_EOL;

    foreach ($todolist as $number => $name){
        echo "$number. $name" . PHP_EOL;
    }
}