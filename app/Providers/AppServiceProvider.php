<?php

namespace App\Providers;
use App\Weather;
use App\Services\Api\Ads\AdsService;
use App\Services\Api\Banners\BannerService;
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

            $userBalance=(new CurrentUserService())->currentUser();
            $check=(new CheckSubscribeService())->check();
            $check=(new CheckSubscribeService())->checkAds();
            $balance=$userBalance->balance ?? null;
            $subscribeOrNot=$userBalance->isSubscribe ?? null;
            $view->with('user', $userBalance );
            $view->with('userBalance', $balance );
            $view->with('subscribeOrNot', $subscribeOrNot );
            //Retrieving banners
            $banners = (new BannerService())->banners();
            $view->with('banners', $banners );
            $data = (new AdsService())->index();
            if($data){
                $numberAdsByTowns = $data[0];
                $view->with('numberAdsByTowns', $numberAdsByTowns );
            }

        });

        view()->composer('dashboard.escort.purchase.list', function ($view)
        {
            $check=(new CheckSubscribeService())->checkAds();
        });
        view()->composer('dashboard.escort.ads.index', function ($view)
        {
            $check=(new CheckSubscribeService())->checkAds();
        });
        view()->composer('purchase.congrats-ads', function ($view)
        {
            $check=(new CheckSubscribeService())->checkAds();
        });
        view()->composer('purchase.congrats-credit', function ($view)
        {
            $check=(new CheckSubscribeService())->checkPayCredit();
        });
        view()->composer('purchase.congrats-plan', function ($view)
        {
            $check=(new CheckSubscribeService())->checkPayPlan();
        });
        view()->composer('dashboard.escort.finance', function ($view)
        {
            $check=(new CheckSubscribeService())->checkPayCredit();
            $check=(new CheckSubscribeService())->checkAds();
        });
        view()->composer('dashboard.escort.index', function ($view)
        {
            $check=(new CheckSubscribeService())->checkPayCredit();
            $check=(new CheckSubscribeService())->checkAds();
        });
        view()->composer('dashboard.customer.finance', function ($view)
        {
            $check=(new CheckSubscribeService())->checkPayCredit();
            $check=(new CheckSubscribeService())->checkPayPlan();
        });
        view()->composer('dashboard.customer.index', function ($view)
        {
            $check=(new CheckSubscribeService())->checkPayCredit();
            $check=(new CheckSubscribeService())->checkPayPlan();
        });
        view()->composer('backend.index', function ($view)
        {
            $check=(new CheckSubscribeService())->checkPayCredit();
            $check=(new CheckSubscribeService())->checkAds();
            $check=(new CheckSubscribeService())->checkPayPlan();
        });
    }
}
