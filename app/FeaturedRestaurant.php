<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuids;
use Illuminate\Database\Eloquent\SoftDeletes;

class FeaturedRestaurant extends Model
{
    use Uuids, SoftDeletes ;

    public $incrementing = false;

    public function restaurant()
	{
		return $this->belongsTo('App\Restaurant', 'restaurant_id');
	}
}
