<?php
namespace Avido\LaravelSmtpeter\Tests;

use Avido\LaravelSmtpeter\ServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

abstract class TestCase extends Orchestra
{
    /**
     * Define environment setup.
     *
     * @param  \Illuminate\Foundation\Application  $app
     * @return void
     */
    protected function getEnvironmentSetUp($app)
    {
        $app['config']->set('smtpeter.secret', 'SMTPETER_API_KEY');
    }

    /**
     * Get package providers.
     *
     * @param  \Illuminate\Foundation\Application  $app
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [
            ServiceProvider::class,
        ];
    }
}
