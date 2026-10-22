<?php

namespace App\Services\Api\MemberShip;

use Exception;
use App\Services\Api\UrlApiService;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class MemberShipService{

     public function MemberShip(){

        //Get all memberships
        $url=(new UrlApiService())->getUrl();

        try{
            $response = Http::acceptJson()->get(UrlApiService::endpoint('v1/memberships'));
            $memberships = json_decode((string) $response->getBody(), true);
            //dd($memberships);
            return $memberships['data'];

        }
        catch(\Exception $e){
            return null;
        }
    }

    public function showPremium(){
        //Get all memberships
        $url=(new UrlApiService())->getUrl();

        try{
            $token=Session::get('tokenUser');
            $response = Http::withToken($token)->acceptJson()->get(UrlApiService::endpoint('v1/memberships/premium'));
            $responseData = json_decode($response);
            //dd($memberships);
            return $response['data'];

        }
        catch(\Exception $e){
            return null;
        }
    }
    public function create($membership){

        $url=(new UrlApiService())->getUrl();

        try{
            $response = Http::withToken(Session::get('tokenUser'))->acceptJson()->post(UrlApiService::endpoint('v1/admin/memberships'), [
                'membership_name' => $membership['membership_name'],
                'period' => $membership['period'],
                'price' => $membership['price'],
            ]);

            return $response;

        }
        catch(\Exception $e){
            return $e;
        }
    }

    public function update($membership){

        $url=(new UrlApiService())->getUrl();

        try{
            $response = Http::withToken(Session::get('tokenUser'))->acceptJson()->put(UrlApiService::endpoint('v1/admin/memberships/'.$membership['id']), [
                'membership_name' => $membership['membership_name'],
                'period' => $membership['period'],
                'price' => $membership['price'],
            ]);

            return $response;

        }
        catch(\Exception $e){
            return $e;
        }
    }

     public function delete($id){

        $url=(new UrlApiService())->getUrl();

        try{
            $response = Http::withToken(Session::get('tokenUser'))->acceptJson()->delete(UrlApiService::endpoint('v1/admin/memberships/'.$id));
            return $response;

        }
        catch(\Exception $e){
            return $e;
        }
    }



    public function getMemberShip($id){

        $url=(new UrlApiService())->getUrl();

        try{
            $response = Http::acceptJson()->get(UrlApiService::endpoint('v1/memberships/'.$id));
            return $response;

        }
        catch(\Exception $e){
            return $e;
        }
    }

    public function show($id){

        //Get current memberships
        $url=(new UrlApiService())->getUrl();

        try{
            $response = Http::acceptJson()->get(UrlApiService::endpoint('v1/memberships/'.$id));
            $memberships = json_decode(($response));
            //dd($memberships);
            //return $memberships['data'];
            return $memberships;

        }
        catch(\Exception $e){
            return null;
        }
    }
}
