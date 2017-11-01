<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'ms_service';
    protected $fillable = [
        'service_name',
    ];
}
