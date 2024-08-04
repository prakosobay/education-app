<?php

namespace App\Services;

class HelloServiceUsa implements HelloService {

    public function hello(string $name): string
    {
        return "hello " . $name;
    }
}
