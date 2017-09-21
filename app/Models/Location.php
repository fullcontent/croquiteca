<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    

public function sectors(){

		return $this->hasMany('App\Models\Sector');
	}

public function routes(){

	 return $this->hasManyThrough('App\Models\Route', 'App\Models\Sector', 'location_id', 'sector_id', 'id');
}


public function city(){

	return $this->hasOne('App\Models\City','id','cidade_id');
}

public function state(){

	return $this->belongsTo('App\Models\State');
}



}
