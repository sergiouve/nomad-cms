<?php

namespace Nomad\NomadCMS;

use Nomad\NomadCMS\NomadCMS;
use Illuminate\Support\ServiceProvider as LaravelProvider;

class NomadCMSServiceProvider extends LaravelProvider
{
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        $this->loadRoutesFrom(__DIR__ . '/Http/routes.php');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'nomadcms');
        $this->publishes([
            __DIR__ . '/../config/nomadcms.php' => config_path('nomadcms.php'),
        ]);
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/nomadcms.php', 'nomadcms');
    }
}
