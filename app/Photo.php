<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
	protected $fillable = ['path'];

    public function flyer(){

    	return $this->belongsTo('App\Flyer');
    }
}
