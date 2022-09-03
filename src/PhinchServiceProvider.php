<?php

namespace Phinch\Phinch;

use Illuminate\Support\ServiceProvider;
use Phinch\Connect\Connect;
use Phinch\Phinch;
use Phinch\PhinchClient;

class PhinchServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishConfig();
    }

    public function register()
    {
        $this->mergeConfig();

        $this->app->singleton(Phinch::class, function ($app) {
            return new Phinch(
                new PhinchClient(config('phinch.api_version'))
            );
        });

        $this->app->singleton(Connect::class, function ($app) {
            return ConnectFactory::make(
                config('services.finch'),
                config('phinch.sandbox')
            );
        });

        $this->app->alias(Phinch::class, 'phinch');
        $this->app->alias(Connect::class, 'phinch.connect');
    }

    protected function mergeConfig()
    {
        $configPath = __DIR__ . '/../config/phinch.php';

        $this->mergeConfigFrom($configPath, 'phinch');
    }

    protected function publishConfig()
    {
        $configPath = __DIR__ . '/../config/phinch.php';

        $this->publishes([$configPath => config_path('phinch.php')], 'config');
    }
}
