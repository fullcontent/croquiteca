<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;


class HomePageController extends Controller
{
    

	public function Index(){


		$locations = DB::table('locations')->get();



		return view('welcome', ['locations'=>$locations]);

	}


}

