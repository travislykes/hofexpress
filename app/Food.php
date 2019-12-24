<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuids;
use Illuminate\Database\Eloquent\SoftDeletes;

class Food extends Model
{
    use Uuids, SoftDeletes ;

    public $incrementing = false;

    public function restaurant()
	{
		return $this->belongsTo('App\Restaurant', 'restaurant_id');
    }
    
    public function menu()
	{
		return $this->belongsTo('App\Menu', 'menu_id');
    }
    
    public function order()
    {

        return $this->belongsToMany('App\Order', 'food_order', 'food_id', 'order_id');
        
    }
}
