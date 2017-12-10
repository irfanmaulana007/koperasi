<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
// use Illuminate\Database\Eloquent\Model;
// use Illuminate\Contracts\Auth\Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    
    protected $table = 'ms_user';
    protected $fillable = [
        'id_role','id_status','name','email','phone',
    ];
}
