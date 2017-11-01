<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceType extends Model
{
    protected $table = 'ms_service_type';
    protected $fillable = [
        'service_type_name',
    ];
}
