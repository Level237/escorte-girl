<?php

namespace App\Providers;

use App\Auth\PassportClientRepository;
use Illuminate\Support\ServiceProvider;
use Laravel\Passport\Bridge\ClientRepository as BridgeClientRepository;
use Laravel\Passport\Passport;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        Passport::$clientUuids = false;
        Passport::enablePasswordGrant();
        $this->app->bind(BridgeClientRepository::class, PassportClientRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
