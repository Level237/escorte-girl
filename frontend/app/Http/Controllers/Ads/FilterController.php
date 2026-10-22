<?php

namespace App\Http\Controllers\Ads;

use Illuminate\Http\Request;
use App\Services\Api\UrlApiService;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use App\Services\Api\List\ListTownService;
use App\Services\Api\Location\QuarterService;
use Illuminate\Pagination\LengthAwarePaginator as Paginator;

class FilterController extends Controller
{
    public function filter(Request $request){
        $url=(new UrlApiService())->getUrl();


        $allAds = [];

        try{

            $query = ['per_page' => 100];
            if ($request->filled('town')) {
                $query['town_id'] = $request->town;
            }
            if ($request->filled('quarter')) {
                $query['quarter_id'] = $request->quarter;
            }
            $tiers = [0 => 'free', 1 => 'premium', 2 => 'gold', 3 => 'vip'];
            if ($request->filled('subscribe_id') && isset($tiers[(int) $request->subscribe_id])) {
                $query['tier'] = $tiers[(int) $request->subscribe_id];
            }
            $allAds = (new \App\Services\Api\Ads\AdsService())->collection('v1/announcements', $query);
            if ($request->filled('age')) {
                $allAds = array_values(array_filter($allAds, function ($ad) use ($request) {
                    return (string) ($ad['age'] ?? '') === (string) $request->age;
                }));
            }
            $towns=(new ListTownService())->list()->data;
            $quarters=(new QuarterService())->getQuarters();
            //error_log($ads);
        }catch(\Exception $e){
             $allAds = [];
        }

        if($request->membership){
            $adsByMembership = [];
            $i = 0;
            foreach($allAds as $ad){
                if($ad['subscribe_id'] == $request->membership){
                    $adsByMembership[$i] = $ad;
                    $i++;
                }
            }
           $allAds =  $adsByMembership;
        }


        $total = count($allAds);
        $per_page = 6;
        $nb_pages = ceil($total/$per_page);
        $current_page = $request->current_page ?? 1;

        $starting_point = ($current_page * $per_page) - $per_page;

        $ads = array_slice($allAds, $starting_point, $per_page, true);

        $ads = new Paginator($ads, $total, $per_page, $current_page, [
            'path' => $request->url(),
            'query' => $request->query(),
        ]);

        //dd($allAds);

        return  view('ads.list', compact('ads','quarters', 'allAds', 'current_page', 'nb_pages','towns'));
        $ads=json_decode($response);
        return view();
    }
}
