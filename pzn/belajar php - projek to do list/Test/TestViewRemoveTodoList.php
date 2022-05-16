<?php

require_once "../View/ViewRemoveTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../Model/todoList.php";

AddTodoList("Ahmad");
AddTodoList("Ihsanullah");
AddTodoList("Rabbani");
AddTodoList("Programmer");
AddTodoList("Web");

ShowTodoList();

ViewRemoveTodoList();

ShowTodoList();