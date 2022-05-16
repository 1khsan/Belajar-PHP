<?php

namespace Traits;

trait SayGoodBye
{
    function GoodBye(?string $name):void
    {
        if(is_null($name)){
            echo "Good bye brother" . PHP_EOL;
        }else {
            echo "Good bye $name" . PHP_EOL;
        }
    }
}

trait Hello
{
    function hello(?string $name):void
    {
        if(is_null($name)){
            echo "Hello brother" . PHP_EOL;
        }else {
            echo "Hello $name" . PHP_EOL;
        }
    }
}
trait HasName{
    public string $name; //properties
}
trait CanRUn{
    public abstract function run():void; //abstrach function
}
trait All{
    //trait inheritance, traits mewarisi traits lain
    use SayGoodBye, Hello, HasName, CanRUn{ 
        // hello as private; // mngoverrid visibily yang ada di function
        // GoodBye as private; // yang tadinya public set ke priivate
    }
}
class Person{
    use All;

    public function run():void{
        echo "Person $this->name is running" . PHP_EOL;
    }

    public function GoodBye(?string $name): void
    {
        echo "Goodbye Person" . PHP_EOL;
    }

    public function hello(?string $name): void
    {
        echo "hello Person" . PHP_EOL;
    }
}   
//trait akan teroveride oleh child
//parent akan teroveraid oleh trait