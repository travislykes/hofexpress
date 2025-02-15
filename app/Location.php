<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuids;
use Illuminate\Database\Eloquent\SoftDeletes;

class Location extends Model
{
    use Uuids, SoftDeletes ;

    public function user()
	{
		return $this->belongsTo('App\User', 'user_id');
	}
}
