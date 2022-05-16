<?php

class zero{
    private array $properties = [];

    //empat magic function yang digunkana untuk dynamic properties
    //tidak perlu mendeklarasikan propertiesnya diwal
    public function __get($name)
    {
        return $this->properties[$name];
    }
    public function __set($name, $value)
    {
        return $this->properties[$name] = $value;
    }
    public function __isset($name):bool
    {
        return isset($this->properties[$name]);
    }
    public function __unset($name)
    {
        unset($this->properties[$name]);
    }
    //dua magic yang digunkan untuk dynamic function
    public function __call($name, $arguments)
    {
        $join = join(",",$arguments);
        echo "call function $name with $join" . PHP_EOL;
    }
    public static function __callStatic($name, $arguments)
    {
        $join = join(",",$arguments);
        echo "call static function $name with $join" . PHP_EOL;
    }
}

$zero = new Zero();
$zero->firstname = "Ahmad";
$zero->middlename = "Ihsanullah";
$zero->lastname = "Rabbbani";

echo "First Name : $zero->firstname" . PHP_EOL;
echo "Middle Name : $zero->middlename" . PHP_EOL;
echo "Last Name : $zero->lastname" . PHP_EOL;
$zero->sayhello("Ahmad","Apa Kabar?");
zero::sayhello("Ihsan","How Are You??");