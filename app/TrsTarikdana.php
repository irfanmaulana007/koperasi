<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TrsTarikdana extends Model
{
    protected $table = 'trs_tarikdana';
    protected $fillable = [
        'id_user','jumlah_tarikan','id_status','created_at'
    ];
}
