<?php

namespace App\Services\Api\Escort;

use Exception;
use App\Services\Api\UrlApiService;
use App\Services\AttachServices;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class AddProfileService{

    public function addProfile($data,$photo,$services){
        $url=(new UrlApiService())->getUrl();
        $path = $photo->store('profile');
        $contents = fopen($photo, 'r');
        $token=Session::get('tokenUser');
        $name=$photo->getClientOriginalName();
        try{
            $response=Http::acceptJson()->withToken($token)->attach("photo",$contents,$name)->post($url.'/api/v1/addProfile', [
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

            $dataResponse=json_decode($response);

            if($dataResponse->completed==true){
                foreach($services as $s){
                    $attachServices=(new AttachServices())->attach($s,$dataResponse->escort);
                }
            }


            return $attachServices;
        }catch(Exception $e){
            dd($e->getMessage());
        }
    }
}
