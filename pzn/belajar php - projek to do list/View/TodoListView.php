<?php


namespace View{

    use Helper\InputHelper;
    use Service\TodoListService;

    class TodoListView{
        private TodoListService $todolistService;

        public function __construct(TodoListService $todoListService)
        {
            $this->todolistService = $todoListService;
        }
        
        function showTodoList():void{
            while (true){
                $this->todolistService->showTodoList();
        
                echo "Menu" . PHP_EOL;
                echo "1. Tambah Todo" . PHP_EOL;
                echo "2. Hapus Todo" . PHP_EOL;
                echo "x. keluar" . PHP_EOL;
        
                $pilihan = InputHelper::input("Pilih");
        
                if ($pilihan == "1"){
                    $this->addTodoList();
                } else if ($pilihan == "2"){
                    $this->removeTodoList();
                } else if ($pilihan == "x"){
                    break;
                } else{
                    echo "Pilihan tidak Dimengerti" . PHP_EOL;
                }
            }
            echo "Terimakasih sudah berkunjung". PHP_EOL;
        }

        function addTodoList():void{
            echo "Menambah TO-DO" . PHP_EOL;
    
            $todo = InputHelper::input("Todo (x untuk batal)");

            if($todo == "x"){
                echo "Batal Menambah TODO" . PHP_EOL;
            }else{
                $this->todolistService->addTodoList($todo);
            }

        } 
        function removeTodoList():void{
            echo "Menghapus TODO" . PHP_EOL;

            $pilihan = InputHelper::input("Nomor (x untuk batalkan)");
            if ($pilihan == "x"){
                echo "Batal Hapus ToDo" . PHP_EOL;
            }else{
                $this->todolistService->removeTodoList($pilihan);             
            }   
        }
    }
}