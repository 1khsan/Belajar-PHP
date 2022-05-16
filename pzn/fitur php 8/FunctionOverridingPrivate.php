<?php

class Manager{
    private function  test():void{
        
    }
}
// private function tidak ada hubungannya lagi dengan child class nya, 
// sehingga kita bebas membuat function dengan nama yang sama walaupun di parent ada
// function private dengan nama yang sama

class VipePresident extends Manager{
    public function test(string $name):string{
        
    }
}