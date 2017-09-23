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


       

        $states = State::whereHas('locations')->with('locations')->orderBy('name')->get();


        $locations = Location::whereHas('sectors')->with('sectors')->get();


        //$locations = Location::withCount(['sectors','routes'])->whereHas('routes')->get();
        $routes = Route::take(5)->get();

        return view('frontend.home')->with(['locations'=>$locations,'routes'=>$routes,'states'=>$states]);

	}




    public function Mapa()
        {
            return view('frontend.mapa');
        }

    public function Local($id='')
        {



            $location = Location::where('id',$id)->get()->first();
            $routes = Route::where('location_id',$id)->with('sector')->get();

            return view('frontend.local')->with(['routes'=>$routes,'location'=>$location]);
        }     


    public function LocalSetores($id='')
        {
            $sectors = Sector::where('location_id',$id)->withCount('routes')->get();


            $location = Location::where('id',$id)->get()->first();

               return view('frontend.setores')->with(['location'=>$location,'sectors'=>$sectors]);
        }

    public function Via($id='')
        {
            $route = Route::find($id);

            dd($route);

            $location = Location::with('city')->find($route->location_id);


            $nextRoutes = Route::where('location_id',$route->location_id)->get();


            return view('frontend.via')->with(['route'=>$route,'location'=>$location,'nextRoutes'=>$nextRoutes]);
        }

    public function Locais($id='')
        {
            
            $locations = State::where('id',$id)->with('locations')->first();

            return view('frontend.locais')->with(['locations'=>$locations]);


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
                        ->paginate(5)->appends('texto', request('texto'));

        return view('frontend.pesquisa',compact('pesquisa'));
    }




}

