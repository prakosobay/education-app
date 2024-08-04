<?php

namespace App\Data;

class Bar {

    public Foo $foo;

    /**
     * @param Foo $foo
     */
    public function __construct(Foo $foo) {
        $this->foo = $foo;
    }

    public function getFoo() {
        return $this->foo->foo();
    }


}
