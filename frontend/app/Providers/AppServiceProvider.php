<?php

namespace App\Providers;
use App\Weather;
use App\Services\Api\Ads\AdsService;
use App\Services\Api\Banners\BannerService;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\ServiceProvider;
use App\Services\Api\CurrentUserService;
use App\Services\Api\UrlApiService;
use App\Services\Api\MemberShip\CheckSubscribeService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton('weather', fn () => new Weather('demo'));
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        view()->composer('*', function ($view) {
            static $shared;

            if ($shared === null) {
                $user = (new CurrentUserService())->currentUser();
                $towns = (new AdsService())->index();

                $shared = [
                    'apiUrl' => UrlApiService::base(),
                    'user' => $user,
                    'userBalance' => $user->balance ?? null,
                    'subscribeOrNot' => $user->isSubscribe ?? null,
                    'banners' => (new BannerService())->banners(),
                    'numberAdsByTowns' => is_array($towns) && isset($towns[0]) ? $towns[0] : [],
                ];
            }

            $view->with($shared);
        });
    }
}
