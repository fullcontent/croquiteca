<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;

class MapController extends Controller
{
    
	public function listLocais(){

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
