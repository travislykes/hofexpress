<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuids;
use Illuminate\Database\Eloquent\SoftDeletes;

class Restaurant extends Model
{
    use Uuids, SoftDeletes ;

    public $incrementing = false;


    public function restaurantType()
	{
		return $this->belongsTo('App\RestaurantType', 'restaurant_type_id');
	}
}
