<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use GuzzleHttp\Client as HttpClient;
use App\Services\FixerApiClient;
use App\Repositories\FixerApiRepository;

class FixerApiProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->singleton(FixerApiClient::class);
        $this->app->singleton(FixerApiRepository::class);
    }
}
