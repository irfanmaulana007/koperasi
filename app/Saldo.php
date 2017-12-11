<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Saldo extends Model
{
    protected $table = 'ms_saldo';
    protected $fillable = [
        'id_user','saldo'
    ];
}
