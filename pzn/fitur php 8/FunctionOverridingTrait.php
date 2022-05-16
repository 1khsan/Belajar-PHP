<?php

trait sample{
    public abstract function sayhello(string $name):string;
}

class useSample {
    use sample;
    public function sayhello(int $name): string
    {
        
    }
}