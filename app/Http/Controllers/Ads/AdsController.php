<?php

namespace App\Http\Controllers\Ads;
use App\Http\Controllers\Controller;
use  App\Services\Api\UrlApiService;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;

class AdsController extends Controller
{
    public function create(){


        //check if user is connected
         if (Session::has('currentUser')){

            $url=(new UrlApiService())->getUrl();

            $user = Session::get('currentUser');

            //Retrieving all towns
            $towns = null;
            try{

                $response = Http::asForm()->get($url."/api/list/towns");
                $towns = json_decode((string) $response->getBody(), true);
                
                if($towns['data'] === null){
                    //throw an exception an display an error
                }
                else{
                    $towns = $towns['data'];
                }
                
            }catch(\Exception $e){
            
            }

            //Retrieving all Ads Categories
            $adsCategories = null;
            try{

                $response = Http::asForm()->get($url."/api/list/categories");
                $adsCategories = json_decode((string) $response->getBody(), true);
                //dd($adsCategories);
                if($adsCategories['data'] === null){
                    //throw an exception an display an error
                }
                else{
                    $adsCategories = $adsCategories['data'];
                }
                
            }catch(\Exception $e){
            
            }

            
            //Generate product token
            do {
                $token = Str::random(32);
            } while (Product::where("token", "=", $token)->first() instanceof Product);

            //Retrieving ads category
            return view('ads.create', compact('towns', 'adsCategories', 'token'));
        }

        else{
                return to_route("login");
            }
        
        
    }

    public function save(Request $request){

        //Retrieve URL API
        $url=(new UrlApiService())->getUrl();

        //Saving Ads
        dd($request->all());
        try{
            $response = Http::asForm()->post($url."/api/ads", [
                'user_id' => $request->phone_n,
                'town_id' => $request->town,
                'category_id' => $request->category,
                'type' => $request->adstype,
                'title' => $request->title,
                'description' => $request->form[0],
            ]);

            if(isset($response['error'])){
                return back()->with('error',"Numero de telephone ou mot de passe invalide");
            }else{
                if($request->session()->has('tokenUser')){
                    $request->session()->forget('tokenUser');
                }
                $access_token = json_decode((string) $response->getBody(), true)['access_token'];
                Session::put('tokenUser', $access_token);
                Session::save();

                $currentUser=(new CurrentUserService())->currentUser();
                return to_route("dashboard");
                //return $access_token;
            }
        }catch(\Exception $e){
            dd($e);
        }
        // //Storage::disk('local')->put('example.txt', 'Contents');
        $photo = Storage::get('img.jpg');
        
        $response = Http::attach(
            'file', $photo, 'photo.jpg'
        )->post($url."/api/ads/image");

        dd((string)$response->getBody());
        dd(json_decode((string) $response->getBody(), true));
    }

}
