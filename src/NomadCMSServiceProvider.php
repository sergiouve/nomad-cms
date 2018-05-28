<?php

namespace Nomad\NomadCMS;

use Nomad\NomadCMS\NomadCMS;
use Illuminate\Support\ServiceProvider as LaravelProvider;

class NomadCMSServiceProvider extends LaravelProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/Http/routes.php');

        $this->publishes([
            __DIR__ . '/../config/nomadcms.php',
        ]);

        $this->app->bind(NomadCMS::class, function($app) {
            $config = $app['config']['nomadcms'];

            return new NomadCMS($config);
        });
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/nomadcms.php', 'nomadcms.php');
    }
}
