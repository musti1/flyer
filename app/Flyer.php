<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flyer extends Model
{
	protected $table = "flyer";

	protected $fillable = [

		'street',
		'city',
		'state',
		'country',
		'price',
		'zip',
		'description'

	];

	public static function LocatedAt($zip, $street){

		$street = str_replace('-', ' ', $street);

		return static::where(compact('zip', 'street'))->first();
	}

	public function getPriceAttribute($price){

		return '$' . number_format($price);
	}

	public function addPhoto(Flyer_photos $photo){

		return $this->photos()->save($photo);

	}

	/**
	 * A flyer is composed of many photos
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
    public function photos(){

    	return $this->hasMany('App\Flyer_photos');
    }

    /**
     * A flyer is owned by a user.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function owner(){

    	return $this->belongsTo('App\User', 'user_id');
    }

    /**
     * Determined if the given user created the flyer
     * @param  User   $user 
     * @return boolean
     */
    public function ownedBy(User $user){

    	return $this->user_id == $user->id;
    }
}
