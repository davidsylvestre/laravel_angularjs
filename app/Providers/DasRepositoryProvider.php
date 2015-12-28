<?php

namespace DasProject\Providers;

use Illuminate\Support\ServiceProvider;

class DasRepositoryProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(\DasProject\Repositories\ClientRepository::class,
                         \DasProject\Repositories\Eloquent\ClientRepositoryEloquent::class);
    }
}
