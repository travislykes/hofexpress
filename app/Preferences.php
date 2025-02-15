<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuids;
use Illuminate\Database\Eloquent\SoftDeletes;

class Preferences extends Model
{
    use Uuids, SoftDeletes ;

    protected $table = 'preferences';
    public $incrementing = false;

    public function restaurant()
	{
		return $this->belongsTo('App\Restaurant', 'restaurant_id');
    }
}
