<?php

namespace Service{

    use Entity\TodoList;
    use Repository\TodoListRepository;

    interface TodoListService{
        function showTodoList():void;

        function addTodoList(string $todo):void;

        function removeTodoList(int $number):void;
    }
    class TodoListServiceImpl implements TodoListService{
        private TodoListRepository $todolistRepository;

        public function __construct(TodoListRepository $todolistRepository)
        {
            $this->todolistRepository = $todolistRepository;
        }
        function showTodoList():void{

            echo "TODOLIST" . PHP_EOL;
            $todolist = $this->todolistRepository->findAll();
            foreach ($todolist as  $number => $name){
            echo "$number.". $name->getTodo()  . PHP_EOL;
        }}
            
        function addTodoList(string $todo):void{
            $todolist = new TodoList($todo);
            $this->todolistRepository->save($todolist);
        }

        function removeTodoList(int $number):void{
            if($this->todolistRepository->remove($number)){
                echo "Sukses Menghapus TodoList" . PHP_EOL;
            }else{
                echo "Gagal Menghapus TodoList" . PHP_EOL;                
            }
        }
    
        
    }
}