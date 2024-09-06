<?php

namespace App\Providers;

use App\IRepository\HomeInterface;
use App\IRepository\PostInterface;
use App\Repository\HomeRepository;
use App\Repository\PostRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{

    public function register(): void
    {
        $this->app->bind(
            PostInterface::class,
            PostRepository::class
        );

        $this->app->bind(
            HomeInterface::class,
            HomeRepository::class
        );
    }


    public function boot(): void
    {
        //
    }
}
