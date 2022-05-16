<?php

//Menagpus to do list

function RemoveTodoList(int $number):bool{
    global $todolist;
    if ($number > sizeof($todolist)){
        return false;
    }
    for($i = $number; $i < sizeof($todolist); $i++){
        $todolist[$i] = $todolist[$i + 1];
    }
    // 1. Ahmad
    //2. Ihsan
    // 3. oi
    //ketika mau hapus poin no 2 
    // perhitungan =
    // i = 2
    // value di no 2 diganti atau ditiban jadi no 3
    //dan no 3 beserta valuenya di UNSET
    unset($todolist[sizeof($todolist)]);
    return true;
}