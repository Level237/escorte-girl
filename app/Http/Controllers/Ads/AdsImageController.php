<?php

namespace App\Http\Controllers\Ads;
use App\Http\Controllers\Controller;
use  App\Services\Api\UrlApiService;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductImage;

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
                $image->storeAs('ads/'.$request->token, $fileName);
                
                return response('Image ajoutée avec succès', 200);
            }

    }
}
