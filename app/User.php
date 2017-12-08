<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'ms_user';
    protected $fillable = [
        'id_role','id_status','name','email','phone','simpanan',
    ];
}
