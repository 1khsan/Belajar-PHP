<?php

class data implements IteratorAggregate{
    var string $first = "first" . PHP_EOL;
    public string $second = "second" . PHP_EOL;
    protected string $third = "third" . PHP_EOL;
    private string $forth = "forth";

    public function getIterator(): Traversable
    {
        $array = [
            "First" => $this->first,
            "Second" => $this->second,
            "Third" => $this->third,
            "Forth" => $this->forth,
        ];

        $iterator = new ArrayIterator($array);
        return $iterator;

        //penulisan simple
        // return new ArrayIterator($array)
    }

}

$data = new data();

foreach ($data as $key => $value){
    echo "$key : $value";
}