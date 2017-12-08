<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table = 'ms_status';
    protected $fillable = [
        'status_name','created_id',
    ];
}
