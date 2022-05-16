<?php

interface HelloWorld{

    function sayHello():void; 
};
//menggunakan annymus class 
//kelas tanopa nama
$helloworld = new class('ihsan') implements HelloWorld{
    public string $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
    function sayHello():void{
        echo "Hello $this->name" . PHP_EOL;
    }
};
$helloworld->sayHello();

// // cara lama
// class sampleHelloWorld implements HelloWorld{
//     public function sayHello():void{
//         echo "Hello World" . PHP_EOL;
//     } 
// };

// $hello = new sampleHelloWorld();
// $hello->sayHello();