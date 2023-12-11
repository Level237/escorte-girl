<?php

namespace App\Http\Controllers\Search;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Api\SearchService;

class SearchController extends Controller
{
    public function search(Request $request){

        $results = (new SearchService)->search($request->s);
        $term = $request->s;
        //dd($results);
        if($results){
            //retrieving all types
            $types = [];
            foreach($results as $result){
                if(array_key_exists($result['type'],$types))
                 continue;
                else{
                    switch($result['type']){
                        case "escorts" :
                            $types[$result['type']]= "Escortes";
                            break;
                        case "towns" :
                            $types[$result['type']]= "Villes";
                            break;
                        case "announcements" :
                            $types[$result['type']]= "Annonces";;
                            break;
                        case "quarters" :
                            $types[$result['type']]= "Quartiers";
                            break;
                    }

                }

            }

            return view('search.index', compact('results', 'types', 'term'));
        }
        else{
            //Request did not gone well do something here
        }


    }

}
