<?php

namespace App\Http\Controllers\Ads;
use App\Http\Controllers\Controller;
use  App\Services\Api\UrlApiService;
use App\Services\Api\Ads\AdsCategoryService;
use App\Services\Api\Escort\GetEscortService;
use App\Services\Api\Ads\AdsService;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use Redirect;
use Illuminate\Pagination\LengthAwarePaginator as Paginator;

class AdsController extends Controller
{
    public function create(){



        //check if user is connected
         if (Session::has('currentUser')){

            $url=(new UrlApiService())->getUrl();
             //$currentUser=(new CurrentUserService())->currentUser();
            $user = Session::get('currentUser');
            // dd($user);
          
            //Retrieving all categories
            $adsCategories = (new AdsCategoryService)->getCategories();
            if($adsCategories == null)
                return view('error');


            //Generate product token
            do {
                $token = Str::random(32);
            } while (Product::where("token", "=", $token)->first() instanceof Product);

            //Retrieving ads category
            return view('ads.create', compact('adsCategories', 'token', 'user'));
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
                $id = json_decode((string) $response->getBody(), true)['id'];
                foreach (\Illuminate\Support\Facades\Storage::files('ads/'.$request->token) as $filename) {
                    $photo = \Illuminate\Support\Facades\Storage::get($filename);
                    $responseImage = Http::attach(
                        'file', $photo, $filename
                    )->post($url."/api/ads/image", [
                        'ads_id' => $id,
                    ]);

                }
                return to_route('membership.display', ['adsId'=>$id]);
               

            }else{

               dd(json_decode((string) $response->getBody(), true));
               //return back()->with('error', implode(" ", json_decode((string) $response->getBody(), true)));
            }
        }catch(\Exception $e){
            dd($e);
            //return back()->with('error',$e);
        }

    }

    public function update(Request $request){

         //Retrieve URL API
        $url=(new UrlApiService())->getUrl();
        //Check if we have at least 4 images
        $ad = (new AdsService)->getAdsById($request->ads_id);
        //dd($request->ads_id);
         if(count($ad['images']) < 4){
                 return Redirect::back()->withErrors(['msg' => 'Votre annonce doit avoir un minimum de 4 images']);
        }

        //Updating ads
         try{
            $response = Http::asForm()->post($url."/api/ads/update", [
                'id' => $request->ads_id,
                'location' => $request->location,
                'category_id' => $request->category,
                'accepted' => $request->accepted,
                'title' => $request->title,
                'description' => $request->form['post_content'],
            ]);
        
            if($response->status() === 200){

                //Now uploading ads's images
                return back()->with('success',"Votre annonce a été bien ,ise à jour bien");

            }else{

              return Redirect::back()->withErrors(['msg' => "Une erreur s'est produite lors de la mise a jour1"]);
            }
        }catch(\Exception $e){
            //dd($e);
           return Redirect::back()->withErrors(['msg' => "Une erreur s'est produite lors de la mise a jour"]);
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

    public function list(Request $request){
         
        $url=(new UrlApiService())->getUrl();
        $allAds = [];

        try{

            $response = Http::asForm()->get($url."/api/announces");
            $allAds = json_decode((string) $response->getBody(), true);
            $allAds = $allAds['data'];
            //error_log($ads);
        }catch(\Exception $e){
             $allAds = [];
        }

        $total = count($allAds);
        $per_page = 5;
        $nb_pages = ceil($total/$per_page);
        $current_page = $request->id ?? 1;

        $starting_point = ($current_page * $per_page) - $per_page;
      
        $ads = array_slice($allAds, $starting_point, $per_page, true);

        $ads = new Paginator($ads, $total, $per_page, $current_page, [
            'path' => $request->url(),
            'query' => $request->query(),
        ]);

        //dd($allAds);

        return  view('ads.list', compact('ads', 'allAds', 'current_page', 'nb_pages'));
    }


    public function adsByTown(Request $request){
         
        $url=(new UrlApiService())->getUrl();
        $allAds = [];

        try{

            $response = Http::asForm()->get($url."/api/adstown/".$request->id);
            $allAds = json_decode((string) $response->getBody(), true);
            $allAds = $allAds['data'];
            //error_log($ads);
        }catch(\Exception $e){
             $allAds = [];
        }

        $total = count($allAds);
        $per_page = 5;
        $nb_pages = ceil($total/$per_page);
        $current_page = $request->id ?? 1;

        $starting_point = ($current_page * $per_page) - $per_page;
      
        $ads = array_slice($allAds, $starting_point, $per_page, true);

        $ads = new Paginator($ads, $total, $per_page, $current_page, [
            'path' => $request->url(),
            'query' => $request->query(),
        ]);

        //dd($allAds);

        return  view('ads.list', compact('ads', 'allAds', 'current_page', 'nb_pages'));
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

   public function edit($id){

     $escort = (new GetEscortService)->getEscort();
     $ad = (new AdsService)->getAdsById($id);
     $adsCategories = (new AdsCategoryService)->getCategories();
     
     if($escort && $adsCategories && $ad){
        return view('dashboard.escort.ads.edit', compact('escort', 'adsCategories','ad'));
     }
    else
        return view('error');

   }

   public function delete($id){

        $url=(new UrlApiService())->getUrl();
        //dd('hrel');
       //Deleting ads
         try{
            $response = Http::asForm()->delete($url."/api/ads/".$id);
        
            if($response->status() === 200){
               
                return back()->with('success',"Annonce supprimée");

            }else{
            
                dd((string) $response->getBody());
              return Redirect::back()->withErrors(['msg' => "Une erreur s'est produite lors de la suppression"]);
            }
        }catch(\Exception $e){
            dd($e);
           return Redirect::back()->withErrors(['msg' => "Une erreur s'est produite lors de la suppression"]);
        }
   }


}
