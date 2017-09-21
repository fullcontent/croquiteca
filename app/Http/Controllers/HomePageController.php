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




}

