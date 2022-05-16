<?php

namespace Data;

use Locale;

abstract class Location{
    public string $name;    
    public function sayhello():void{
        echo "$this->name is my city". PHP_EOL;
    }    
}
class City extends Location{
    
}

class Province extends Location{
    
}

class Country extends Location{
    public function sayhello():void{
        echo "$this->name is my country". PHP_EOL;
    }    
}