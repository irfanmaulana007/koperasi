<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SukuBunga extends Model
{
    protected $table = 'ms_sukubunga';
    protected $fillable = [
        'suku_bunga','jangka_waktu','created_id','created_at',
    ];
}
