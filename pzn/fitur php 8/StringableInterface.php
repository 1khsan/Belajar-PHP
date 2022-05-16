<?php

function sayhello(Stringable $stringable):void{
    echo "Hello {$stringable->__toString()}" . PHP_EOL;
}

class person {
    public function __toString():string
    {
        return 'Person';
    }
}

sayhello(new person());