<?php

namespace App\Services\Api\Location;

use Exception;
use App\Services\Api\UrlApiService;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class QuarterService{

    public function getQuarters(){
        
        $url=(new UrlApiService())->getUrl();
         //Retrieving all towns
            $towns = null;
            
            try{

                $response = Http::acceptJson()->get(UrlApiService::endpoint('v1/quarters'));
                
                $towns = json_decode((string) $response->getBody(), true);

                //dd($towns);
                if($towns['data'] === null){
                    return null;
                }
                else{
                    return $towns['data'];
                }

            }catch(\Exception $e){

                return null;
            }

    }

    public function create($quarter){

        //dd($quarter);
        $url=(new UrlApiService())->getUrl();

        try{
            $response = Http::withToken(Session::get('tokenUser'))->acceptJson()->post(UrlApiService::endpoint('v1/admin/quarters'), [
                'quarter_name' => $quarter['quarter_name'],
                'town_id' => $quarter['town_id'],
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
            $response = Http::withToken(Session::get('tokenUser'))->acceptJson()->delete(UrlApiService::endpoint('v1/admin/quarters/'.$id));
            return $response;

        }
        catch(\Exception $e){
            return $e;
        }
    }

    public function update($quarter){

        $url=(new UrlApiService())->getUrl();

        try{
            $response = Http::withToken(Session::get('tokenUser'))->acceptJson()->put(UrlApiService::endpoint('v1/admin/quarters/'.$quarter['id']), [
                'quarter_name' => $quarter['quarter_name'],
                'town_id' => $quarter['town_id'],
            ]);

            return $response;

        }
        catch(\Exception $e){
            return $e;
        }
    }

    public function getquarter($id){

        $url=(new UrlApiService())->getUrl();

        try{
            $response = Http::acceptJson()->get(UrlApiService::endpoint('v1/quarters/'.$id));
            return $response;

        }
        catch(\Exception $e){
            return $e;
        }
    }
}
