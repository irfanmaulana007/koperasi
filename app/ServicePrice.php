<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServicePrice extends Model
{
    protected $table = 'ms_service_price';
    protected $fillable = [
        'service_min_weight','origin','destination','service_area','service_price','service_rating','estimation_time_min','estimation_time_max'
    ];
}
