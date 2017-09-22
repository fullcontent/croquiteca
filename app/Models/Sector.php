<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    
    public $includes = array('routes');

	public function routes(){

		return $this->hasMany('App\Models\Route');
	}

	public function sector(){

    	return $this->belongsTo('App\Models\Location');
    }
}
