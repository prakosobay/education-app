<?php

namespace App\Data;

class Foo {

    private String $text;

    public function foo(): string {
        return $this->text;
    }

    public function setText(string $text): void {
        $this->text = $text;
    }

}
