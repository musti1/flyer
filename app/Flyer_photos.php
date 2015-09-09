<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flyer_photos extends Model
{
	protected $table = "photos";

    protected $fillable = ['photo'];
	
    public function flyer(){

    	return $this->belongsTo('App\Flyer');
    }

}