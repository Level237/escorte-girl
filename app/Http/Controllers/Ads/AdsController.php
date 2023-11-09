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
             //$currentUser=(new CurrentUserService())->currentUser();
            $user = Session::get('currentUser');
            // dd($user);
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
                    return view('error');
                }
                else{
                    $adsCategories = $adsCategories['data'];
                }

            }catch(\Exception $e){
                return view('error');
            }


            //Generate product token
            do {
                $token = Str::random(32);
            } while (Product::where("token", "=", $token)->first() instanceof Product);

            //Retrieving ads category
            return view('ads.create', compact('towns', 'adsCategories', 'token', 'user'));
        }

        else{
                return to_route("login");
            }


    }

    public function save(Request $request){

        //dd($request->user_id);
        //Retrieve URL API
        $url=(new UrlApiService())->getUrl();

        //Saving Ads

        try{
            $response = Http::asForm()->post($url."/api/ads", [
                'user_id' => $request->user_id,
                'location' => $request->location,
                'category_id' => $request->category,
                'accepted' => $request->accepted,
                'title' => $request->title,
                'description' => $request->form['post_content'],
            ]);


            if($response->status() === 200){

                //Now uploading ads's images
                foreach (\Illuminate\Support\Facades\Storage::files('ads/'.$request->token) as $filename) {
                    $photo = \Illuminate\Support\Facades\Storage::get($filename);
                    $responseImage = Http::attach(
                        'file', $photo, $filename
                    )->post($url."/api/ads/image", [
                        'ads_id' => json_decode((string) $response->getBody(), true)['id'],
                    ]);

                }
                return back()->with('success',"Votre annonce a ete bien creee");
                 //$photo = Storage::get('img.jpg');

                // $responseImage  = Http::asForm()

                // $responseImage = Http::attach(
                //     'file', $photo, 'photo.jpg'
                // )->post($url."/api/ads/image", [
                //     'ads_id' => 1,
                //  ]);

                //  if($responseImage->status() === 200){
                //      return back()->with('success',"Votre annonce a ete bien creee");
                //  }

            }else{

               dd(json_decode((string) $response->getBody(), true));
               //return back()->with('error', implode(" ", json_decode((string) $response->getBody(), true)));
            }
        }catch(\Exception $e){
            dd($e);
            return back()->with('error',$e);
        }

    }

    public function getAds(){
         
        $url=(new UrlApiService())->getUrl();
        $ads = [];

        try{

            $response = Http::asForm()->get($url."/api/announces");
            $ads = json_decode((string) $response->getBody(), true);
            $ads = $ads['data'];
            //error_log($ads);
        }catch(\Exception $e){
             $ads = [];
        }

        return  $ads;
    }

    public function list(){
         
        $url=(new UrlApiService())->getUrl();
        $ads = [];

        try{

            $response = Http::asForm()->get($url."/api/announces");
            $ads = json_decode((string) $response->getBody(), true);
            $ads = $ads['data'];
            //error_log($ads);
        }catch(\Exception $e){
             $ads = [];
        }

        return  view('ads.list', compact('ads'));
    }


    public function adsByTown(Request $request){
         
        $url=(new UrlApiService())->getUrl();
        $ads = [];

        try{

            $response = Http::asForm()->get($url."/api/adstown/".$request->id);
            $ads = json_decode((string) $response->getBody(), true);
            $ads = $ads['data'];
            //error_log($ads);
        }catch(\Exception $e){
             $ads = [];
        }

        //dd($ads);
        return  view('ads.list', compact('ads'));
    }

   

   public function show(Request $request){

     $ad = null;
     $ads = null;
     $url=(new UrlApiService())->getUrl();

        try{

            $response = Http::asForm()->get($url."/api/announces/".$request->id);
            $response1 = Http::asForm()->get($url."/api/announces/");
            $ad = json_decode((string) $response->getBody(), true)['data'];
            $ads = json_decode((string) $response1->getBody(), true)['data'];
            
        }catch(\Exception $e){
             $ad = null;
        }

        return  view('ads.detail', compact('ad', 'ads'));
   }


}
