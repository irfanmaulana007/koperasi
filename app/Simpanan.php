<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Simpanan extends Model
{
    protected $table = 'ms_simpanan';
    protected $fillable = [
        'simpanan_name','created_id',
    ];
}
