<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pinjaman extends Model
{
    protected $table = 'ms_pinjaman';
    protected $fillable = [
        'pinjaman_name','created_id',
    ];
}
