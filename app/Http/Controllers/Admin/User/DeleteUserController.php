<?php

namespace App\Http\Controllers\Admin\User;
use  App\Services\Api\UrlApiService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DeleteUserController extends Controller
{
    public function delete($id){
        
        dd('Hello world');

        $url = (new UrlApiService())->getUrl();
    
       //Deleting ad
         try{
            
            $response = Http::asForm()->delete($url."/api/users/".$id);
          
            if($response->status() === 200){

                return back()->with('success',"Annonce supprimée");

            }else{

              return back()->with('msg', "Une erreur s'est produite lors de la suppression");
            }
        }catch(\Exception $e){
            //dd($e);
           return back()->with('msg', "Une erreur s'est produite lors de la suppression");
        }

    }
}
