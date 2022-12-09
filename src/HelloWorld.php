<?php

namespace src;

class HelloWorld
{
    public string $message;

    public function __construct($string = 'Hello World!')
    {
        $this->message = $string;
    }

    public function sayHello()
    {
        return $this->message;
    }
}
