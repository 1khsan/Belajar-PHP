<?php

trait A{
    public function doA(){
        echo "a" . PHP_EOL;
    }
    public function doB(){
        echo "b". PHP_EOL; 
    }
}

trait B {
    public function doA(){
        echo "A". PHP_EOL;
    } 
    public function doB(){
        echo "B". PHP_EOL;
    }
}

class TraitConflict{
    use A, B{
        A::doA insteadof B; 
        //untuk doA menggunakan trait A dibanding trait B
        B::doB insteadof A;
        //untuk doB menggunakan trait B dibanding trait A
    }
}

$TraitConflitc = new TraitConflict();
$TraitConflitc->doA();
$TraitConflitc->doB();