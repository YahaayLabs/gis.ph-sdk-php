<?php

namespace GisPh\Laravel;

use GisPh\Client;
use Illuminate\Support\ServiceProvider;

class GisPhServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../../config/gisph.php', 'gisph');

        $this->app->singleton(Client::class, function ($app) {
            return new Client($app['config']['gisph']);
        });
    }

    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../../config/gisph.php' => config_path('gisph.php'),
            ], 'gisph-config');
        }
    }
}
