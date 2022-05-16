<?php

class Student{
    public string $id;
    public string $name;
    public Int $value;
    private string $sample;

    public function setSample(string $sample):void{
        $this->sample = $sample;
    }

    public function __clone(){
        unset($this->sample);
    }

    public function __toString():string
    //merubah object menjadi string
    {
        return "Student id: $this->id, name: $this->name, value: $this->value";
    }

    public function __invoke(...$arguments):void
    {
        $join = join(',',$arguments);
        echo  "Invoke students with arguments $join" . PHP_EOL;
    }

    public function __debugInfo():array
    {
        return [
            "id" => $this->id,
            "name" => $this->name,
            "value" => $this->value,
            "sample" => $this->sample,
            "Author" => "IHSAN",
            "Version" => "1.1.0"
        ];
    }
}