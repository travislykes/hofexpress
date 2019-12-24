<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuids;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tags extends Model
{
    use Uuids, SoftDeletes ;

    public $incrementing = false;
}
