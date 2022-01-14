<?php
namespace Avido\LaravelSmtpeter;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/smtpeter.php' => config_path('smtpeter.php'),
            ], 'config');
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__ . '/../config/smtpeter.php', 'smtpeter');

        // Register the main class to use with the facade
        $this->app->singleton(SmtpeterApi::class, function () {
            return new SmtpeterApi();
        });
    }
}
