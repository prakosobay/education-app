<?php

use App\Data\Bar;
use App\Data\Foo;
use Illuminate\Support\Facades\Log;

test('micin', function () {

    $sajiku = env("MICIN");

    $this->assertSame("sajiku", $sajiku);

});

test('author', function () {
    $author = config("author.name");
    $this->assertSame("Mr. Somebody", $author);
});

test('fooBar', function () {

    $this->app->singleton(Foo::class, function ($app) {
        return new Foo();
    });
    $this->app->singleton(Bar::class, function ($app) {
        return new Bar($app->make(Foo::class));
    });

    $foo = $this->app->make(Foo::class);
    $bar = $this->app->make(Bar::class);
    $foo->setText("Bar");

    $this->assertSame($bar->foo->foo(), $foo->foo());

});

test('fooBar2', function () {

    $this->app->singleton(Foo::class, function ($app) {
        return new Foo();
    });

    $bar = $this->app->make(Bar::class);
    $foo = $this->app->make(Foo::class);
    $foo->setText("Bar");

    $this->app->instance(Bar::class, $foo);

    $this->assertSame($bar->foo->foo(), $foo->foo());

});

test('dependencyInjectionUsingAppServiceContainer', function () {

    $this->app->singleton(Foo::class, function ($app) {
        $fooOne = new Foo();
        $fooOne->setText("Fo From App Services Container");
        return $fooOne;
    });

    $bar = $this->app->make(Bar::class);
    $foo = $this->app->make(Foo::class);

    $bar->foo->setText("Fo From App Services Container Edited by Bar");
    $foo->setText("Fo From App Services Container Edited by Foo");

    Log::info($bar->foo->foo());
    Log::info($foo->foo());
    info('hello world');

    //it should same
    $this->assertEquals($bar->foo->foo(), $foo->foo());

});

test('interface', function () {
    $this->app->singleton(\App\Services\HelloService::class, \App\Services\HelloServiceUsa::class);
//    $this->app->singleton(\app\services\HelloService::class, \app\services\HelloServiceUsa::class);

    $hello = $this->app->make(\App\Services\HelloService::class);

    $this->assertEquals("hello mister", $hello->hello("mister"));

});

test('callArtikelServiceFromProvider', function () {
    $artikel = $this->app->make(\App\Services\ArtikelService::class);
    $this->assertEquals('success', $artikel->test());
});

test('callCommentServiceFromProvider', function () {
    $comment = $this->app->make(\App\Services\CommentService::class);
    $this->assertEquals('success', $comment->test());
});

