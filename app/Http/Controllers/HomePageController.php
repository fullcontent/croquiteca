<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Models\Sector;
use App\Models\Location;
use App\Models\Route;
use App\Models\State;
use Illuminate\Support\Facades\Input;


class HomePageController extends Controller
{
    

	public function Index(){



        $locations = Location::withCount(['sectors','routes'])->whereHas('routes')->get();

        $states = Location::withCount(['sectors','routes'])->whereHas('routes')->get();


        $routes = Route::take(10)->get();

        return view('frontend.home')->with(['locations'=>$locations,'routes'=>$routes]);

	}



    public function listaVias($sector_id=''){


        $setores = DB::table('routes')
                        
                        // ->join('locations','sectors.location_id','=','locations.id')
                        // ->join('cities','locations.cidade_id','=','cities.id')
                    // ->join('states','cities.state_id','=','states.id')  
                        ->join('sectors','sectors.id','=','routes.sector_id')
                        
                        ->select('sectors.nome','routes.sector_id')
                        ->selectRaw('count(routes.sector_id) as counter')
                        ->groupBy('routes.sector_id','sectors.nome')     
                        ->get();

        $setor = DB::table('sectors')->where('id','=',$sector_id)->first();

        $vias = DB::table('routes')->where('sector_id','=',$sector_id)->paginate(5);



            return view('frontend.setores', compact('setores','vias','setor'));
 }
	


    public function listaSetores(){

            $sectors = Sector::withCount('routes')->with('routes')->get();
            return view('frontend.setores')->with('setores', $sectors);

    }


    public function listaVias2($sector_id=''){


        $setores = DB::table('routes')
                        
                        // ->join('locations','sectors.location_id','=','locations.id')
                        // ->join('cities','locations.cidade_id','=','cities.id')
                        // ->join('states','cities.state_id','=','states.id')  
                        ->join('sectors','sectors.id','=','routes.sector_id')
                        
                        ->select('sectors.nome','routes.sector_id')
                        ->selectRaw('count(routes.sector_id) as counter')
                        ->groupBy('routes.sector_id','sectors.nome')     
                        ->get();

        $setor = DB::table('sectors')->where('id','=',$sector_id)->first();

        $vias = DB::table('routes')->where('sector_id','=',$sector_id)->get();



            return view('frontend.setores', compact('setores','vias','setor'));
    }


    public function listaLocais(){

        $locais = DB::table('locations')
                        ->join('cities','locations.cidade_id','=','cities.id')
                        ->join('states','cities.state_id','=','states.id')
                        ->select('cities.name as city','locations.*','states.abbr as state')
                        ->orderBy('locations.nome')

                    ->get();

               
        //return dd($locais, JSON_PRETTY_PRINT);

        return view('frontend.locais',compact('locais'));

    }


    public function detalheVia($id=''){

        $dados = Route::where('id','=',$id)->first();

        return view('frontend.detalhe',compact('dados'));
    }


    public function pesquisar(){

        if(Input::has('texto')==false){return redirect('/');}

        $pesquisa = DB::table('routes')
                        ->join('sectors','routes.sector_id','=','sectors.id')
                        ->join('locations','sectors.location_id','=','locations.id')
                        ->join('cities','locations.cidade_id','=','cities.id')
                        ->join('states','cities.state_id','=','states.id')
                        ->select('routes.*','sectors.nome as setor','cities.name as cidade','locations.nome as local','states.name as estado')
                        ->where('locations.nome','like','%'.Input::get('texto').'%')
                        ->orWhere('locations.descricao','like','%'.Input::get('texto').'%')
                        ->orwhere('routes.nome','like','%'.Input::get('texto').'%')
                        ->orWhere('routes.descricao','like','%'.Input::get('texto').'%')
                        ->orwhere('sectors.nome','like','%'.Input::get('texto').'%')
                        ->orWhere('sectors.descricao','like','%'.Input::get('texto').'%')
                        ->orWhere('cities.name','like','%'.Input::get('texto').'%')
                        ->orWhere('states.name','like','%'.Input::get('texto').'%')




                    ->get();

        return view('frontend.pesquisa',compact('pesquisa'));
    }






    public function loadJS(){

		$locations = Location::withCount(['sectors','routes'])->whereHas('routes')->get();

        $original_data = json_decode($locations, true);
        $features = array();

                foreach($original_data as $key => $value) { 
            $features[] = array(
                    'type' => 'Feature',
                    'geometry' => array('type' => 'Point', 'coordinates' => array((float)$value['longitude'],(float)$value['latitude'])),
                    'properties' => array('name' => $value['nome'], 'id' => $value['id'], 'description' => $value['descricao'], 'routes_count'=>$value['routes_count']),
                    );
            };   

        $allfeatures = array('type' => 'FeatureCollection', 'features' => $features);
       
        $locais = json_encode($allfeatures, JSON_PRETTY_PRINT);

        return $locais;

        


	}


}

