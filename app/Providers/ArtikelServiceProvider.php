<?php

namespace App\Providers;

use App\Services\ArtikelService;
use App\Services\ArtikelServiceImpl;
use App\Services\HelloService;
use App\Services\HelloServiceIna;
use Illuminate\Support\ServiceProvider;

class ArtikelServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(ArtikelService::class, ArtikelServiceImpl::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
