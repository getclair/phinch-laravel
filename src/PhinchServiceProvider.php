<?php

namespace Phinch;

use Illuminate\Support\ServiceProvider;
use Phinch\Finch\Finch;
use Phinch\Finch\FinchClient;

class PhinchServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishConfig();
    }

    public function register()
    {
        $this->mergeConfig();

        $this->app->singleton(Finch::class, function ($app) {
            return new Finch(
                new FinchClient(
                    config('services.phinch.client_id'),
                    config('services.phinch.client_secret'),
                    config('phinch.api_version'),
                    config('services.phinch.redirect_url'),
                )
            );
        });
    }

    protected function mergeConfig()
    {
        $configPath = __DIR__.'/../config/phinch.php';

        $this->mergeConfigFrom($configPath, 'phinch');
    }

    protected function publishConfig()
    {
        $configPath = __DIR__.'/../config/phinch.php';

        $this->publishes([$configPath => config_path('phinch.php')], 'config');
    }
}
