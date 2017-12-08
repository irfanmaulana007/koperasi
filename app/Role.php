<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'ms_role';
    protected $fillable = [
        'role_name','created_id',
    ];
}
