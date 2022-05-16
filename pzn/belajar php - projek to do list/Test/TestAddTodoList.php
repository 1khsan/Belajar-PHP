<?php

require_once "../Model/todoList.php";
require_once "../BusinessLogic/AddTodoList.php";

AddTodoList("Ihsan");
AddTodoList("Ahmad");

var_dump($todolist);
