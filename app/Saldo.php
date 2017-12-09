<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Simpanan extends Model
{
    protected $table = 'ms_saldo';
    protected $fillable = [
        'id_user','saldo'
    ];
}
