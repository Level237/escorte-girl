<?php

namespace App\Services\Api\Escort;

use Exception;
use App\Services\Api\UrlApiService;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class AddProfileService{

    public function addProfile($data,$photo){
        $url=(new UrlApiService())->getUrl();
        $path = $photo->store('profile');

        $token=Session::get('tokenUser');
        try{
            $response=Http::acceptJson()->withToken($token)->attach("photo",$photo->getRealPath(),$photo)->asForm()->post($url.'/api/v1/addProfile', [
                'escort_name'=> mb_convert_encoding($data['escort_name'], 'UTF-8', 'UTF-8'),
                'whatsapp_number'=>mb_convert_encoding($data['whatsapp_number'], 'UTF-8', 'UTF-8'),
                'sexuality'=>mb_convert_encoding($data['sexuality'], 'UTF-8', 'UTF-8'),
                'age'=>mb_convert_encoding($data['age'], 'UTF-8', 'UTF-8'),
                'description'=>mb_convert_encoding($data['description'], 'UTF-8', 'UTF-8'),
                'ethnic_id'=>mb_convert_encoding($data['ethnic_id'], 'UTF-8', 'UTF-8'),
                'shape_id'=>mb_convert_encoding($data['shape_id'], 'UTF-8', 'UTF-8'),
                'height_id'=>mb_convert_encoding($data['height_id'], 'UTF-8', 'UTF-8'),
                'weight_id'=>mb_convert_encoding($data['weight_id'], 'UTF-8', 'UTF-8'),
                'skin_color_id'=>mb_convert_encoding($data['skin_color_id'], 'UTF-8', 'UTF-8'),
                'quarter_id'=>mb_convert_encoding($data['quarter_id'], 'UTF-8', 'UTF-8'),

            ]);


            return $response;
        }catch(Exception $e){
            dd($e->getMessage());
        }
    }
}
