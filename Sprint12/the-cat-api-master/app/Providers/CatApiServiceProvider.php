<?php

namespace App\Providers;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use Illuminate\Support\ServiceProvider;

class CatApiServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('catApiClient', function () {
            return new Client([
                'base_uri' => $this->app->config->get('cat-api.endpoint'),
                'headers' => [
                    'x-api-key' => $this->app->config->get('cat-api.key'),
                ]
            ]);
        });
        $this->app->alias('catApiClient', Client::class);
        $this->app->bind(ClientInterface::class, Client::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
