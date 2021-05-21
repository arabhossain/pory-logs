<?php


namespace Pory\Logs\ServiceProviders;


use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;
use Pory\Logs\PoryLogs;

class PoryLogsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->app['router']->aliasMiddleware('pory-log', MiddlewareServices::class);

        Config::set('pory.modules.logs', [
            'description'    => '',
            'active'    => true,
            'config'    => [
                'dbConnection' => [
                    'driver' => env('LOG_DB_CONNECTION'),
                    'host' => env('LOG_DB_HOST'),
                    'port' => env('LOG_DB_PORT'),
                    'database' => env('LOG_DB_DATABASE'),
                    'username' => env('LOG_DB_USERNAME'),
                    'password' => env('LOG_DB_PASSWORD'),
                ]
            ]

        ]);
    }

    public function register()
    {
        $this->app->singleton('poryLogs', function () {
            return new PoryLogs();
        });
    }

}
