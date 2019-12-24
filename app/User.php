<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Traits\Uuids;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use Uuids, SoftDeletes ;

    public $incrementing = false;

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'firstname','lastname','email', 'password','user_type_id','restaurant_id','ownership_verified'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function userType()
	{
		return $this->belongsTo('App\UserType', 'user_type_id');
    }
    
    public function restaurant()
	{
		return $this->belongsTo('App\Restaurant', 'restaurant_id');
    }
    
    public function profile()
	{
		return $this->hasOne('App\Profile', 'user_id');
    }
    
    public function locations()
	{
		return $this->hasMany('App\Location', 'user_id');
	}
}
