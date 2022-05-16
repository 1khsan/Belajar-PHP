<?php

require_once __DIR__ . "/../Entity/TodoList.php";
require_once __DIR__ . "/../Service/TodoListService.php";
require_once __DIR__ . "/../Repository/TodoListRepository.php";

use Entity\TodoList;
use Repository\TodoListRepositoryImpl;
use Service\TodoListServiceImpl;

function testShowTodoList():void{
    $todolistRepository = new TodoListRepositoryImpl();
    $todolistRepository->todolist[1] = new TodoList("Belajar PHP");
    $todolistRepository->todolist[2] = new TodoList("Belajar PHP OOP");
    $todolistRepository->todolist[3] = new TodoList("Belajar PHP Database");
    $todolistService = new TodoListServiceImpl($todolistRepository);

    $todolistService->showTodoList();
}

function testAddTodoList():void{
    $todolistRepository = new TodoListRepositoryImpl();
    $todolistService = new TodoListServiceImpl($todolistRepository);
    $todolistService->addTodoList("Belajar PHP");
    $todolistService->addTodoList("Belajar PHP OOP");
    $todolistService->addTodoList("Belajar PHP Database");
    

    $todolistService->showTodoList();
}

function testRemoveTodoList():void{
    $todolistRepository = new TodoListRepositoryImpl();
    $todolistService = new TodoListServiceImpl($todolistRepository);
    $todolistService->addTodoList("Belajar PHP");
    $todolistService->addTodoList("Belajar PHP OOP");
    $todolistService->addTodoList("Belajar PHP Database");
    
    $todolistService->showTodoList();
    $todolistService->removeTodoList(2);
    
    $todolistService->showTodoList();
    $todolistService->removeTodoList(1);
    
    $todolistService->showTodoList();
    $todolistService->removeTodoList(5);
    $todolistService->showTodoList();
}
testRemoveTodoList();