<?php

namespace App\Services;

class HelloServiceIna implements HelloService {

    public function hello(string $name): string
    {
        return "halo " . $name;
    }
}
