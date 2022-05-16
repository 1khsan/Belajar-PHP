<?php

class Programmer{
    public string $name;

    public function __construct($name)
    {
        $this->name = $name;
        
    }
}
class BackendProgrammer extends Programmer
{
}
class frontEndProgrammer extends Programmer
{
}
class Company{
    public Programmer $programmer;
}

function SayHelloProgrammer(Programmer $programmer)
//akan masuk ke class Programmer dan mengambil properties name
{
    if ($programmer instanceof BackendProgrammer){
        echo "Hello Backend Programmer $programmer->name" . PHP_EOL;
    } else if ($programmer instanceof frontEndProgrammer){
        echo "Hello Frontend Programmer $programmer->name" . PHP_EOL;
    } else if ($programmer instanceof Programmer){
        echo "Hello Programmer $programmer->name" . PHP_EOL;
    }
    //intansceof = type check and cast
    //mengecek tipe data apakah objek ini ada di kelas tersebut
}