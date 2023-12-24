<?php

namespace App\Providers;
use App\Weather;
use App\Services\Api\Ads\AdsService;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\ServiceProvider;
use App\Services\Api\CurrentUserService;
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
        view()->composer('*', function ($view)
        {
            $check=(new CheckSubscribeService())->check();
            $userBalance=(new CurrentUserService())->currentUser();
            $balance=$userBalance->balance ?? null;
            $subscribeOrNot=$userBalance->isSubscribe ?? null;
            $view->with('user', Session::get('currentUser') );
            $view->with('userBalance', $balance );
            $view->with('subscribeOrNot', $subscribeOrNot );
            $data = (new AdsService())->index();
            if($data){
                $numberAdsByTowns = $data[0];
                $view->with('numberAdsByTowns', $numberAdsByTowns );
            }

        });
    }
}
