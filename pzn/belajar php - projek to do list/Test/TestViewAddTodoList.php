<?php

require_once "../View/ViewAddTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";

AddTodoList("Ahmad");
AddTodoList("Ihsanullah");
AddTodoList("Rabbani");

ViewAddTodoList();

ShowTodoList();

ViewAddTodoList();

ShowTodoList();


