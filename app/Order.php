<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuids;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use Uuids, SoftDeletes ;

    public function restaurant()
	{
		return $this->belongsTo('App\Restaurant', 'restaurant_id');
    }
    
    public function user()
	{
		return $this->belongsTo('App\User', 'user_id');
    }
    
    public function location()
	{
		return $this->belongsTo('App\Location', 'location_id');
    }
    
    public function paymentType()
	{
		return $this->belongsTo('App\PaymentType', 'payment_type_id');
    }
    
    public function orderStatus()
	{
		return $this->belongsTo('App\OrderStatus', 'order_status_id');
    }
    
    public function rider()
	{
		return $this->belongsTo('App\Rider', 'rider_id');
    }
    
    public function food()
    {

    return $this->belongsToMany('App\Food', 'food_order', 'food_id', 'order_id');
    
    }
}
