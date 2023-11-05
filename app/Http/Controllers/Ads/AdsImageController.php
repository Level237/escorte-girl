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
            $name = "toto";
            $extension = $image->getClientOriginalExtension();

            $allowedfileExtension=['jpg','png','jpeg'];

            $check = in_array($extension,$allowedfileExtension);

            if(!$check){

                return response('Extension invalide', 400);
            }
            else{

                //Storing file in disk
                // $fileName = $product->id.'_'.time().'_'.$image->getClientOriginalName().'.'.$image->getClientOriginalExtension();
                // $image->storeAs('product-images', $fileName);

                // //Add image to database (product_images table)
                // $productImage = new \App\Models\productImage;
                // $productImage->path = $fileName;
                // $productImage->product_id = $product->id;
                // $productImage->save();
                
                return response('Image ajoutée avec succès', 200);
            }

    }
}
