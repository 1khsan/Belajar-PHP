<?php

require_once "../Model/todoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";
require_once "../BusinessLogic/RemoveTodoList.php";

AddTodoList("Ahmad");
AddTodoList("ihsan");
AddTodoList("Rabbani");
AddTodoList("BUdi");
AddTodoList("Joko");

ShowTodoList();

RemoveTodoList(4);

ShowTodoList();

RemoveTodoList(2);

ShowTodoList();

$succes= RemoveTodoList(5);

var_dump($succes);