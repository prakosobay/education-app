<?php

namespace App\Providers;

use App\Services\CommentService;
use App\Services\CommentServiceImpl;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class CommentServiceProvider extends ServiceProvider implements DeferrableProvider
{

    public function provides()
    {
        return [CommentService::class];
    }

    public array $singletons = [
        CommentService::class => CommentServiceImpl::class,
    ];

    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
