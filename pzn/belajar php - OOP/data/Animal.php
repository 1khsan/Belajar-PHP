<?php

namespace Data;
require_once 'Food.php';
abstract class Animal{
    public string $name;
    
    abstract public function run():void;
    
    abstract public function eat(AnimalFood $animalfood):void;

    //tidak mendeklarasikan isi fungsi abstrack
    
    //yang membuat turunannya = overridding
}
class Cat extends Animal{
    public function run():void{
    echo "cat $this->name is running" . PHP_EOL;
    }
    public function eat(AnimalFood $animalfood):void{
        echo "cat $this->name is eating" . PHP_EOL;
    }
}
class Dog extends Animal{
    public function run():void{
    echo "Dog $this->name is running". PHP_EOL;
    }
    public function eat(Food $animalfood):void{
        echo "dog $this->name is eating";
    }
}