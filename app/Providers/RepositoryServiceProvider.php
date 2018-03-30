<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Media\Providers\FileRepositoryEloquent;
use Modules\Media\Repositories\FileRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {      
        $this->app->bind(FileRepository::class, FileRepositoryEloquent::class);      
        //:end-bindings:
    }
}
