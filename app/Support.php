<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuids;
use Illuminate\Database\Eloquent\SoftDeletes;

class Support extends Model
{
    use Uuids, SoftDeletes ;

    public $incrementing = false;

    public function restaurant()
	{
		return $this->belongsTo('App\Restaurant', 'restaurant_id');
    }

    public function user()
	{
		return $this->belongsTo('App\User', 'user_id');
    }
}
