<?php

namespace App\Providers;
use App\Weather;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\ServiceProvider;
use App\Services\Api\CurrentUserService;
use App\Services\Api\Ads\AdsService;

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

            $userBalance=(new CurrentUserService())->currentUser();
            $balance=$userBalance->balance ?? null;
            $view->with('user', Session::get('currentUser') );
            $view->with('userBalance', $balance );
            $data = (new AdsService())->index();
            if($data){
                $numberAdsByTowns = $data[0];
                $view->with('numberAdsByTowns', $numberAdsByTowns );
            }
            
        });
    }
}
