<?php

namespace Maxma\Dashboard;

use Illuminate\Support\ServiceProvider;

class DashboardServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/views', 'Dashboard');

        $this->publishes([
            __DIR__ . '/views' => base_path('resources/views/vendor/dashboard'),
            //__DIR__.'/config/dashboard.php' => config_path('dashboard.php'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('dashboard', function() {
            return new Dashboard;
        });

    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['dashboard'];
    }
}
