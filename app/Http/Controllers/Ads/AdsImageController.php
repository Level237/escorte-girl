<?php

namespace App\Http\Controllers\Ads;
use App\Http\Controllers\Controller;
use  App\Services\Api\UrlApiService;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductImage;
use App\Services\Api\Ads\AdsService;


class AdsImageController extends Controller
{

    public function images(Request $request){
            
      
            $image = $request->file('file');
            $extension = $image->getClientOriginalExtension();

            $allowedfileExtension=['jpg','png','jpeg'];

            $check = in_array($extension,$allowedfileExtension);

            if(!$check){

                return response('Extension invalide', 400);
            }
            else{

                //Storing file in disk
                $fileName = time().'_'.$image->getClientOriginalName().'.'.$image->getClientOriginalExtension();
                $image->storeAs('ads/'.$request->user_id, $fileName);
                
                return response('Image ajoutée avec succès', 200);
            }

    }
    
    public function updateImage(Request $request){

            //Check if limit of images has already been reach
             $ad = (new AdsService)->getAdsById($request->ads_id);
        
            if(count($ad['images']) >= 4){
                 return response('Limite de photos atteinte', 400);
            }

            $image = $request->file('file');
            $extension = $image->getClientOriginalExtension();

            $allowedfileExtension=['jpg','png','jpeg'];

            $check = in_array($extension,$allowedfileExtension);

            if(!$check){

                return response('Extension invalide', 400);
            }
            else{

                //Storing file in disk
                $fileName = $image->getClientOriginalName().'.'.$image->getClientOriginalExtension();
                $image->storeAs('ads/', $fileName);
                $photo = \Illuminate\Support\Facades\Storage::get('ads/'.$fileName);
                //Storing file to server
                 $url=(new UrlApiService())->getUrl();
                 $response = Http::attach(
                        'file', $photo, $fileName
                    )->post($url."/api/ads/image", [
                        'ads_id' => $request->ads_id,
                    ]);
                if($response->status() === 200){
                    return response('Succés image bien reçu', 200);
                }
                else
                return response("Une erreur s'est produite", 500);
                
            }

    }

    public function displayAdsImage($id, $path)
    {
     
        $url=(new UrlApiService())->getUrl();
        $response = Http::asForm()->get($url.'/api/displayadsimage/'.$id.'/'.$path);
        return $response;
   
    }
}
