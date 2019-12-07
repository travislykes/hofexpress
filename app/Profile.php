<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuids;
use Illuminate\Database\Eloquent\SoftDeletes;

class Profile extends Model
{
    use Uuids, SoftDeletes ;

    public $incrementing = false;


    public function user()
	{
		return $this->belongsTo('App\User', 'user_id');
	}
}
