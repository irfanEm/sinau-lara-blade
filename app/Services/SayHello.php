<?php

namespace App\Services;

class SayHello
{
    public function sayHello(string $name): string
    {
        return "Hai $name";
    }
}
